const express = require("express");
const fetch = require("node-fetch");
const app = express();

app.get("/", (req, res) => {
  const url = "http://api.coindesk.com/v1/bpi/currentprice.json";
  fetch(url)
    .then((response) => response.json())
    .then((data) => {
      res.send(`
      <h1>Harga Bitcoin</h1>
      <p>USD : ${data.bpi.USD.rate}</p>
      <p>GBP : ${data.bpi.GBP.rate}</p>
      <p>EUR : ${data.bpi.EUR.rate}</p>
    `);
    })
    .catch((error) => {
      res.send("error");
    });
});

app.listen(3000, () => {
  console.log(`Server berjalan pada port 3000`);
});
