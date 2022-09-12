const mongoose = require("mongoose");

const ProductSchema = new mongoose.Schema(
  {
    laptop: { type: Number, required: false },
    monitor: { type: Number, required: false },
    phone: { type: Number, required: false }
  },
  { timestamps: true }
);

module.exports = mongoose.model("Product", ProductSchema);