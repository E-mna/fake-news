let goToTop = document.getElementById("goToTop");
let verticalNavbar = document.querySelector(".verticalNavbar");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.documentElement.scrollTop > 200 && window.innerWidth > 768) {
    goToTop.style.display = "flex";
    verticalNavbar.style.height = "100vh";
  } else if (
    document.documentElement.scrollTop <= 200 &&
    window.innerWidth > 768
  ) {
    goToTop.style.display = "none";
    verticalNavbar.style.height = "calc(100vh - 201px)";
  } else if (
    document.documentElement.scrollTop > 110 &&
    window.innerWidth <= 768
  ) {
    goToTop.style.display = "flex";
    verticalNavbar.style.height = "100vh";
  } else if (
    document.documentElement.scrollTop <= 109 &&
    window.innerWidth <= 768
  ) {
    goToTop.style.display = "none";
    verticalNavbar.style.height = "calc(100vh - 110px)";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
