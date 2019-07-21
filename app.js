
// import Express library
const express = require("express");
// var faker = require ("faker");
// variable to access the methods
// exposes a top-level function
const app = express();
// render HTML
app.engine('html', require('ejs').renderFile);
// add static files folder 
app.use(express.static("public"));

// book var
/* var book = {
    title: faker.lorem.words(),
    author: faker.name.findName(),
    author_image: faker.image.avatar(),
    release_date: faker.date.recent(),
    image: faker.image.abstract(),
    price: faker.commerce.price(),
    short_description: faker.lorem.sentence(),
    long_description: faker.lorem.paragraph()
} 

console.log(book);      
*/

// creating a “route”
app.get("/", function(req, res){

    // res.render("index.html", book);
    res.render("index.html");

});

// creating a “route”
app.get("/artificial_intelligence", function(req, res){

    res.render("artificial_intelligence.html");

});

// creating a “route”
app.get("/machine_learning", function(req, res){

    res.render("machine_learning.html");

});

// creating a “route”
app.get("/deep_learning", function(req, res){

    res.render("deep_learning.html");

});

// allow the server to listen for any request
// local server listener
// app.listen("8081", "127.0.0.1", function() {
// heroku server listner
app.listen(process.env.PORT, process.env.IP, function() {

    console.log("Express Server is Running...")

});