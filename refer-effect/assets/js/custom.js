//code view
document.addEventListener('DOMContentLoaded', (event) => {
  document.querySelectorAll('pre code').forEach((el) => {
    hljs.highlightElement(el);
  });
});

//Code tab menu
//js
const viewBtn = document.querySelectorAll(".view-title ul li");
const viewCont = document.querySelectorAll(".view-cont > div");

viewBtn.forEach((btn, index) => {
  btn.addEventListener("click", function (e) {
    e.preventDefault();
    viewBtn.forEach(el => el.classList.remove("active"));
    btn.classList.add("active");

    viewCont.forEach(el => el.style.display = "none");
    viewCont[index].style.display = "block";
  });
});
//jquery
// const viewBtn = $(".view-title ul li");
// const viewCont = $(".view-cont > div");

// viewBtn.click(function(){
//   viewBtn.removeClass("active");
//   $(this).addClass("active");

//   let index = $(this).index();
//   viewCont.css("display","none");
//   viewCont.eq(index).css("display","block");
// });

//modal
const infoBtn = document.querySelector(".info button");
const modal = document.querySelector("#modal");
const modalBtn = document.querySelector("#modal button");

infoBtn.addEventListener("click", function () {
  modal.classList.remove("show", "hide");
  modal.classList.add("show");
});

modalBtn.addEventListener("click", function () {
  modal.classList.remove("show", "hide");
  modal.classList.add("hide");
});