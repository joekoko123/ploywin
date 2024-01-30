const hamburger = document.querySelector(".fa-bars");
const mobile_navbar_overlay = document.querySelector(".mobile-navbar-overlay");
const mobile_navbar = document.querySelector(".mobile-navbar");
hamburger.addEventListener("click", () => {
  mobile_navbar_overlay.classList.add("mobile-navbar-overlay-visible");
  mobile_navbar.classList.add("mobile-navbar-overlay-visible");
  console.log(mobile_navbar);
});

const X_button = document.querySelector(".fa-x");
X_button.addEventListener("click", () => {
  mobile_navbar_overlay.classList.remove("mobile-navbar-overlay-visible");
  mobile_navbar.classList.remove("mobile-navbar-overlay-visible");
});

const blurryDiv = document.querySelector(".mobile-navbar-blur");

blurryDiv.addEventListener("click", () => {
  mobile_navbar_overlay.classList.remove("mobile-navbar-overlay-visible");
  mobile_navbar.classList.remove("mobile-navbar-overlay-visible");
});

window.addEventListener("load", function () {
  var navBarHeight = document.querySelector(".nav-bar").offsetHeight;
  if (window.location.pathname.includes("aboutUs.html")) {
    const about_us_img = this.document.querySelector(".second-container");

    about_us_img.style.marginTop = navBarHeight + "px";
  }
  // if (window.location.pathname.includes("index.html")) {
  //   var videoContainer = document.querySelector(".video-container");

  //   videoContainer.style.marginTop = navBarHeight + "px";
  // }
  if (window.location.pathname.includes("InTheNews.html")) {
    var banner = document.querySelector(".banner-section");

    banner.style.marginTop = navBarHeight + "px";
  }

  try {
    const top = document.querySelector(".top-div");
  top.style.marginTop = navBarHeight + "px";
  } catch (error) {
    
  }
  

});
