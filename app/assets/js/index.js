$(document).ready(function () {
  $(window).scroll(function () {
    // sticky navbar on scroll
    if (this.scrollY > 20) {
      $(".navbar").addClass("sticky");
    } else if (this.scrollY < 20) {
      $(".navbar").removeClass("sticky");
    } else {
      $(".navbar").removeClass("sticky");
    }
    // show/hide btn slide up
    if (this.scrollY > 300) {
      $(".scroll-up-btn").addClass("show");
    } else {
      $(".scroll-up-btn").removeClass("show");
    }
  });
  // slide-up
  $(".scroll-up-btn").click(function () {
    $("html").animate({ scrollTop: 0 });
    // removing smooth scroll on slide-up button click
    $("html").css("scrollBehavior", "auto");
  });

  $(".navbar .menu li a").click(function () {
    // applying again smooth scroll on menu items click
    $("html").css("scrollBehavior", "smooth");
  });
});

// validation password
var password = document.getElementById("password"),
  confirm_password = document.getElementById("confirm_password");

function validatePassword() {
  if (password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity("");
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
