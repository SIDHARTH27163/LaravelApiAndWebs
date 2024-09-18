
var scrollpos = window.scrollY;
var header = document.getElementById("header");
var navcontent = document.getElementById("nav-content");
// var navaction = document.getElementById("navAction");
// var navaction1 = document.getElementById("navAction1");
var brandname = document.getElementById("brandname");
var toToggle = document.querySelectorAll(".toggleColour");
var toToggle1 = document.querySelectorAll(".toggleColour1");
var toToggle2 = document.querySelectorAll(".toggleColour2");
var toToggle3 = document.querySelectorAll(".toggleColour3");
var toToggle4 = document.querySelectorAll(".toggleColour4");
var toToggle6 = document.querySelectorAll(".toggleColour6");
document.addEventListener("scroll", function () {
  /*Apply classes for slide in bar*/
  scrollpos = window.scrollY;

  if (scrollpos > 60) {
     header.classList.add("bg-white");
    // header.classList.remove("transparent");


    //Use to switch toggleColour colours
    for (var i = 0; i < toToggle.length; i++) {
      toToggle[i].classList.add("text-amber-700");
      toToggle[i].classList.remove("text-rose-600");
    //   toToggle1[i].classList.add("text-slate-900");
    //   toToggle1[i].classList.remove("text-rose-600");
      toToggle2[i].classList.add("text-amber-700");
      toToggle2[i].classList.remove("text-rose-600");
      toToggle3[i].classList.add("text-amber-700");
      toToggle3[i].classList.remove("text-rose-600");
      toToggle4[i].classList.add("text-amber-700");
      toToggle4[i].classList.remove("text-rose-600");
    //   toToggle6[i].classList.remove("text-rose-600");
    }

     header.classList.add("bg-white");
    // navcontent.classList.remove("bg-gray-50");
    // navcontent.classList.add("bg-white");
  } else {
    header.classList.remove("bg-white");
    // header.classList.add("transparent");
    // header.classList.add("transparent");
    //Use to switch toggleColour colours
    for (var i = 0; i < toToggle.length; i++) {
      toToggle[i].classList.add("text-rose-600");
      toToggle[i].classList.remove("text-amber-700");
    //   toToggle1[i].classList.add("text-rose-600");
    //   toToggle1[i].classList.remove("text-slate-900");
      toToggle2[i].classList.add("text-rose-600");
      toToggle2[i].classList.remove("text-amber-700");
      toToggle3[i].classList.add("text-rose-600");
      toToggle3[i].classList.remove("text-amber-700");
      toToggle4[i].classList.add("text-rose-600");
      toToggle4[i].classList.remove("text-amber-700");
    //   toToggle6[i].classList.add("text-rose-600");
    //   toToggle6[i].classList.remove("text-amber-700");
    }

    // header.classList.remove("shadow");
    // header.classList.add("bg-white");
    // navcontent.classList.remove("bg-white");
    // navcontent.classList.add("bg-gray-200");
  }
});



var navMenuDiv = document.getElementById("nav-content");
var navMenu = document.getElementById("nav-toggle");

document.onclick = check;
function check(e) {
  var target = (e && e.target) || (event && event.srcElement);

  //Nav Menu
  if (!checkParent(target, navMenuDiv)) {
    // click NOT on the menu
    if (checkParent(target, navMenu)) {
      // click on the link
      if (navMenuDiv.classList.contains("hidden")) {
        navMenuDiv.classList.remove("hidden");
      } else {
        navMenuDiv.classList.add("hidden");
      }
    } else {
      // click both outside link and outside menu, hide menu
      navMenuDiv.classList.add("hidden");
    }
  }
}
function checkParent(t, elm) {
  while (t.parentNode) {
    if (t == elm) {
      return true;
    }
    t = t.parentNode;
  }
  return false;
}
