const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
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
var modal = document.getElementById("popup1");
var btn = document.getElementById("btn1");
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
//popup1 region end
//popup2 region start
var modal = document.getElementById("popup2");
var btn = document.getElementById("btn2");
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
//popup2 region end
//popup3 region start
var modal = document.getElementById("popup3");
var btn = document.getElementById("btn3");
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
//popup3 region end
//popup4 region start
var modal = document.getElementById("popup4");
var btn = document.getElementById("btn4");
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
//popup4 region end
//popup5 region start
var modal = document.getElementById("popup5");
var btn = document.getElementById("btn5");
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
//popup5 region end
//popup6 region start
var modal = document.getElementById("popup6");
var btn = document.getElementById("btn6");
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
//popup6 region end
1;
