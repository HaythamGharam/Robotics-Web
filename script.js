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

var memBtn = document.getElementById("mem-btn");
memBtn.onclick = function () {
  Swal.fire({
    title: "Chairman",
    text: "Hello, my name is Mohamed Yessine Ksibi I am 23 Years old and I am a mechanical engineering student in the IIT",
    imageUrl: "images/members/yessine.jpg",
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: "Custom image",
  });
};

var memBtn1 = document.getElementById("mem-btn1");
memBtn1.onclick = function () {
  Swal.fire({
    title: "General Secretary",
    text: "Modal with a custom image.",
    imageUrl: "https://unsplash.it/400/200",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image",
  });
};

var memBtn2 = document.getElementById("mem-btn2");
memBtn2.onclick = function () {
  Swal.fire({
    title: "Sweet!",
    text: "Modal with a custom image.",
    imageUrl: "https://unsplash.it/400/200",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image",
  });
};

var memBtn3 = document.getElementById("mem-btn3");
memBtn3.onclick = function () {
  Swal.fire({
    title: "Sweet!",
    text: "Modal with a custom image.",
    imageUrl: "https://unsplash.it/400/200",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image",
  });
};

var memBtn4 = document.getElementById("mem-btn4");
memBtn4.onclick = function () {
  Swal.fire({
    title: "Sweet!",
    text: "Modal with a custom image.",
    imageUrl: "https://unsplash.it/400/200",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image",
  });
};

var memBtn5 = document.getElementById("mem-btn5");
memBtn5.onclick = function () {
  Swal.fire({
    title: "Sweet!",
    text: "Modal with a custom image.",
    imageUrl: "https://unsplash.it/400/200",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image",
  });
};

var memBtn6 = document.getElementById("mem-btn6");
memBtn6.onclick = function () {
  Swal.fire({
    title: "Sweet!",
    text: "Modal with a custom image.",
    imageUrl: "https://unsplash.it/400/200",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image",
  });
};

var memBtn7 = document.getElementById("mem-btn7");
memBtn7.onclick = function () {
  Swal.fire({
    title: "Sweet!",
    text: "Modal with a custom image.",
    imageUrl: "https://unsplash.it/400/200",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image",
  });
};

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
