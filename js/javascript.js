//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$(".btn-number").click(function (e) {
  e.preventDefault();

  fieldName = $(this).attr("data-field");
  type = $(this).attr("data-type");
  var input = $("input[name='" + fieldName + "']");
  var currentVal = parseInt(input.val());

  if (!isNaN(currentVal)) {
    if (type == "minus") {
      if (currentVal > input.attr("min")) {
        input.val(currentVal - 1).change();
      }
      if (parseInt(input.val()) == input.attr("min")) {
        $(this).attr("disabled", true);
      }
    } else if (type == "plus") {
      if (currentVal < input.attr("max")) {
        input.val(currentVal + 1).change();
      }
      if (parseInt(input.val()) == input.attr("max")) {
        $(this).attr("disabled", true);
      }
    }
  } else {
    input.val(0);
  }

  var currentVal = parseInt(input.val());
  var type = $(this).attr("data-field");
  //facts(parseInt($('input[name='+fieldName+']').val()), type);
  facts(currentVal, type);
});

$(".input-number").focusin(function () {
  $(this).data("oldValue", $(this).val());
});

$(".input-number").change(function () {
  minValue = parseInt($(this).attr("min"));
  maxValue = parseInt($(this).attr("max"));
  valueCurrent = parseInt($(this).val());

  name = $(this).attr("name");
  if (valueCurrent >= minValue) {
    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr(
      "disabled"
    );
  } else {
    alert("Sorry, the minimum value was reached");
    $(this).val($(this).data("oldValue"));
  }
  if (valueCurrent <= maxValue) {
    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr(
      "disabled"
    );
  } else {
    alert("Sorry, the maximum value was reached");
    $(this).val($(this).data("oldValue"));
  }
});

function facts(amount, type) {
  // apples ipad är 80 kg / padda    https://www.apple.com/uk/environment/
  // avrundar ner lite för apples skit är overpriced och jag antar de använder mer co2 / produkt
  var kg;
  if (type == "mobil") {
    kg = amount * 70;
    document.getElementById("faktaMobil").innerHTML =
      amount + " mobiler orsakar " + kg + "kg co2";

  } else if (type == "laptop") {
    kg = amount * 280;
    document.getElementById("faktaLaptop").innerHTML =
      amount + " laptops orsakar " + kg + "kg co2";

  } else if (type == "skarm") {
    kg = amount * 450;
    document.getElementById("faktaSkarm").innerHTML =
      amount + " skärmar orsakar " + kg + "kg co2";
  
    } else if (type == "statdator") {
    kg = amount * 175;
    document.getElementById("faktaStat").innerHTML =
      amount + " Stationära orsakar " + kg + "kg co2";
  } else if (type == "surfplatta") {
    kg = amount * 110;
    document.getElementById("faktaSurfplatta").innerHTML =
      amount + " Surfplatta orsakar " + kg + "kg co2";

  }
  else {
    alert("no type that matches");
  }
  // document.getElementById("faktaTotal").innerHTML ="Totala mängden CO₂: " + total + " kg + ";
}
$(".input-number").keydown(function (e) {
  // Allow: backspace, delete, tab, escape, enter and .
  if (
    $.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
    // Allow: Ctrl+A
    (e.keyCode == 65 && e.ctrlKey === true) ||
    // Allow: home, end, left, right
    (e.keyCode >= 35 && e.keyCode <= 39)
  ) {
    // let it happen, don't do anything
    return;
  }
  // Ensure that it is a number and stop the keypress
  if (
    (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) &&
    (e.keyCode < 96 || e.keyCode > 105)
  ) {
    e.preventDefault();
  }
});

// document.getElementById('searchbutton').addEventListener("click", function(e){


function mapContent() {
  var api_key = "QISAgbgPAJM82OrxXXStAQ34NIBwkrvd";
  var latAndLong = { lat: 62.39514901159899, lng: 17.309021334034593 };
  var zoomLevel = 14; 
  var yourAddress = "Sundsvalls Kommunhus, Centralgatan 4";

  var map = tt.map({
    container: "map",
    key: api_key,
    center: latAndLong,
    zoom: zoomLevel,
  });

  var marker = new tt.Marker().setLngLat(latAndLong).addTo(map);

  // FOR CUSTOM MARKER
  //var customMarker = document.createElement('div');
  //customMarker.id = 'marker';
  //var marker = new tt.Marker({element: customMarker}).setLngLat(latAndLong).addTo(map);

  var popupOffsets = {
    top: [0, 0],
    bottom: [0, -70],
    "bottom-right": [0, -70],
    "bottom-left": [0, -70],
    left: [25, -35],
    right: [-25, -35],
  };

  var popup = new tt.Popup({ offset: popupOffsets }).setHTML(yourAddress);
  marker.setPopup(popup).togglePopup();
}
