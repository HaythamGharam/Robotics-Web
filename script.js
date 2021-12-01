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
var modal = document.getElementsByClassName("popup"); // ell erreur mte3ek houni 5ater el Model dima Ye54 fi awel wa7da mawjoud fiha Popup
var btn = document.getElementById("btn");
var exit = document.getElementsByClassName("close")[0];

// Zedt he4i  esta3mel el JQuery 
$(document).ready(function(){
  $(document).on("click","#btn1",function(){
      modal.style.display = "block";
  });
  $(document).on("click","#btn2",function(){
      modal.style.display = "block";
  });

});



// btn.onclick = function () {
//   modal.style.display = "block";
// };

exit.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
//popup region end
