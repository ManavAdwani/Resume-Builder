console.log("Hello");
var buttons = document.querySelectorAll("#btn");
const name = document.getElementById("name");
const red = document.getElementById("red");
const green = document.getElementById("green");
const blue = document.getElementById("blue");
const yellow = document.getElementById("yellow");
const black = document.getElementById("black");
const header = document.getElementById("header");
const colors = document.getElementById("colors");
const cntt = document.getElementById("contact");
const skls = document.getElementById("skills");
const education = document.getElementById("edu");
const exp = document.getElementById("experience");
const pro = document.getElementById("project");
const proflie = document.getElementById("profille");

buttons.forEach(function (btn) {
  red.addEventListener("click", function (event) {
    event.preventDefault();
    var header = document.getElementById("header");
    var colors = document.getElementById("colors");
    var name = document.getElementById("name");
    var btns = document.querySelectorAll(".myButton");

    header.style.backgroundColor = "red";
    colors.style.backgroundColor = "red";
    name.style.color = "white";
    cntt.style.color="red";
    education.style.color="red";
    skls.style.color="red";
    exp.style.color="red";
    pro.style.color="red";
    proflie.style.color="red";
    buttons.forEach(function (btn) {
      btn.style.backgroundColor = "#eac2c4";
      btn.style.color = "black";
    });
  });
});

buttons.forEach(function (btn) {
  green.addEventListener("click", function (event) {
    event.preventDefault();
    var header = document.getElementById("header");
    var colors = document.getElementById("colors");
    var name = document.getElementById("name");
    var btns = document.querySelectorAll(".myButton");

    header.style.backgroundColor = "rgb(9, 238, 9)";
    colors.style.backgroundColor = "rgb(9, 238, 9)";
    name.style.color = "white";
    cntt.style.color="green";
    education.style.color="green";
    skls.style.color="green";
    exp.style.color="green";
    pro.style.color="green";
    proflie.style.color="green";
    buttons.forEach(function (btn) {
      btn.style.backgroundColor = "rgb(119, 246, 119)";
      btn.style.color = "black";
    });
  });
});

buttons.forEach(function (btn) {
  blue.addEventListener("click", function (event) {
    event.preventDefault();
    var header = document.getElementById("header");
    var colors = document.getElementById("colors");
    var name = document.getElementById("name");
    // var btns = document.querySelectorAll(".myButton");

    header.style.backgroundColor = "blue";
    colors.style.backgroundColor = "blue";
    name.style.color = "white";
    cntt.style.color="blue";
    education.style.color="blue";
    skls.style.color="blue";
    exp.style.color="blue";
    pro.style.color="blue";
    proflie.style.color="blue";
    buttons.forEach(function (btn) {
      btn.style.backgroundColor = "rgb(142, 142, 240)";
      btn.style.color = "white";
    });
  });
});

buttons.forEach(function (btn) {
  yellow.addEventListener("click", function (event) {
    event.preventDefault();
    var header = document.getElementById("header");
    var colors = document.getElementById("colors");
    var name = document.getElementById("name");
    //   var btns = document.querySelectorAll('.myButton');

    header.style.backgroundColor = "rgb(183, 183, 3)";
    colors.style.backgroundColor = "rgb(183, 183, 3)";
    name.style.color = "white";
    cntt.style.color="yellow";
    education.style.color="yellow";
    skls.style.color="yellow";
    exp.style.color="yellow";
    pro.style.color="yellow";
    proflie.style.color="yellow";
    buttons.forEach(function (btn) {
      btn.style.backgroundColor = "#f4f796";
      btn.style.color = "black";
    });
  });
});

buttons.forEach(function (btn) {
  black.addEventListener("click", function (event) {
    event.preventDefault();
    var header = document.getElementById("header");
    var colors = document.getElementById("colors");
    var name = document.getElementById("name");
    // var btns = document.querySelectorAll(".myButton");

    header.style.backgroundColor = "black";
    colors.style.backgroundColor = "black";
    name.style.color = "white";
    cntt.style.color="black";
    education.style.color="black";
    skls.style.color="black";
    exp.style.color="black";
    pro.style.color="black";
    proflie.style.color="black";


    buttons.forEach(function (btn) {
      btn.style.backgroundColor = "rgb(57, 57, 57)";
      btn.style.color = "white";
    });
  });
});
