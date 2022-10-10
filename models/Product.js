const mongoose = require("mongoose");

const ProductSchema = new mongoose.Schema(
  {
    mobil: { type: Number, required: false },
    laptop: { type: Number, required: false },
    skarm: { type: Number, required: false },
    statdator: { type: Number, required: false },
    surfplatta: { type: Number, required: false }
  },
  { timestamps: true }
);

module.exports = mongoose.model("Product", ProductSchema);