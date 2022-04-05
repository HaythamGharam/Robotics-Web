const body = document.querySelector("body");
const navbar = document.querySelector(".mynavbar");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = () => {
  navbar.classList.add("show");
  menuBtn.classList.add("hide");
  body.classList.add("disabled");
};
cancelBtn.onclick = () => {
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
};
window.onscroll = () => {
  this.scrollY > 20
    ? navbar.classList.add("sticky")
    : navbar.classList.remove("sticky");
};

//popup region start
var modal = document.getElementById("popup");
var btn = document.getElementById("btn");
var exit = document.getElementsByClassName("close")[0];
btn.onclick = function () {
  modal.style.display = "block";
};

exit.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
//popup region end
//popup1 region start
var modal1 = document.getElementById("popup1");
var btn1 = document.getElementById("btn1");
var exit = document.getElementsByClassName("close1")[0];
btn1.onclick = function () {
  modal1.style.display = "block";
};

exit.onclick = function () {
  modal1.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
};
//popup1 region end
//popup2 region start
var modal2 = document.getElementById("popup2");
var btn2 = document.getElementById("btn2");
var exit = document.getElementsByClassName("close2")[0];
btn2.onclick = function () {
  modal2.style.display = "block";
};

exit.onclick = function () {
  modal2.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
};
//popup2 region end
//popup3 region start
var modal3 = document.getElementById("popup3");
var btn3 = document.getElementById("btn3");
var exit = document.getElementsByClassName("close3")[0];
btn3.onclick = function () {
  modal3.style.display = "block";
};

exit.onclick = function () {
  modal3.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
};
//popup3 region end
//popup4 region start
var modal4 = document.getElementById("popup4");
var btn4 = document.getElementById("btn4");
var exit = document.getElementsByClassName("close4")[0];
btn4.onclick = function () {
  modal4.style.display = "block";
};

exit.onclick = function () {
  modal4.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
};
//popup4 region end
//popup5 region start
var modal5 = document.getElementById("popup5");
var btn5 = document.getElementById("btn5");
var exit = document.getElementsByClassName("close5")[0];
btn5.onclick = function () {
  modal5.style.display = "block";
};

exit.onclick = function () {
  modal5.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
};
//popup5 region end
//popup6 region start
var modal6 = document.getElementById("popup6");
var btn6 = document.getElementById("btn6");
var exit = document.getElementsByClassName("close6")[0];
btn6.onclick = function () {
  modal6.style.display = "block";
};

exit.onclick = function () {
  modal6.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
};
//popup6 region end

var actButt = document.getElementById("act-button1");
actButt.onclick = function () {
  Swal.fire({
    title: "First",
    text: "Second Popup Description in Script.JS LINE 169.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ab, labore in sit,molestiasnobis ipsa quo dolores repellat blanditiis nemo repudiandae doloremque ad nesciunt.Temporibus minima provident eaque! Optio totam excepturi perferendis! Saepe dolore officiisrem nobis. Cumque quia magni id soluta ipsa quas, quo distinctio delectus. Dolor,error.",
    imageUrl: "images/arduino-training.jpg",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image",
  });
};
var actButt2 = document.getElementById("act-button2");
actButt2.onclick = function () {
  Swal.fire({
    title: "Second",
    text: "Second Popup Description in Script.JS LINE 169.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ab, labore in sit,molestiasnobis ipsa quo dolores repellat blanditiis nemo repudiandae doloremque ad nesciunt.Temporibus minima provident eaque! Optio totam excepturi perferendis! Saepe dolore officiisrem nobis. Cumque quia magni id soluta ipsa quas, quo distinctio delectus. Dolor,error.",
    imageUrl: "images/arduino-training.jpg",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image",
  });
};
var actButt3 = document.getElementById("act-button3");
actButt3.onclick = function () {
  Swal.fire({
    title: "Third!",
    text: "Second Popup Description in Script.JS LINE 169.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ab, labore in sit,molestiasnobis ipsa quo dolores repellat blanditiis nemo repudiandae doloremque ad nesciunt.Temporibus minima provident eaque! Optio totam excepturi perferendis! Saepe dolore officiisrem nobis. Cumque quia magni id soluta ipsa quas, quo distinctio delectus. Dolor,error.",
    imageUrl: "images/arduino-training.jpg",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "",
  });
};
1;
