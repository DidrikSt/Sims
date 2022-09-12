//mongodb
require('./config/db');

const app = require('express')();
const port = process.env.PORT || 5000;

//cors
const cors = require("cors");
app.use(cors());

const ProductRouter = require("./api/Product");

//For accepting post form data
const bodyParser = require('express').json;
app.use(bodyParser());

app.use('/product', ProductRouter);

app.listen(port, () => {
    console.log(`Server running on port ${port}`);
})