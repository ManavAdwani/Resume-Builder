// console.log("HELLO JUI")
const textBox = document.getElementById("story");
const button = document.getElementById("storybtn");
const chatbox = document.getElementById("gpt");

textBox.addEventListener("focus", function () {
  button.style.display = "block";
  // textBox.style.marginBottom = "0px";
});
textBox.addEventListener("blur", function () {
  // button.style.display = "none";
  // textBox.style.marginBottom = "10px";
});

document.addEventListener("DOMContentLoaded", function () {
  event.preventDefault();
  // Your code here
  // var clicked = false
  document.getElementById("storybtn").addEventListener("click", function () {
    var ifclicked = false;
    ifclicked = true;
    // console.log(ifclicked);
    if (ifclicked == true){
      
      chatbox.style.display="block";
    };
    event.preventDefault();
  });
});
// button.addEventListener("click", function () {
//   ifclicked = true;
//   if (ifclicked == true) {
//     alert("BROKE");
//   }
// });
