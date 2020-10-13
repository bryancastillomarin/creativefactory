"use strict"

var bandera = true;
var slideIndex = 0;
showDivs(slideIndex);

function plusDivsCarousel(n) {
    showDivs(slideIndex += n);
}

function plusDivs(n) {
    bandera = false;
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    bandera = false;
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " w3-white";
}

function showSlides(){
    if (bandera) {
        plusDivsCarousel(1);
        setTimeout(showSlides, 7000);
    } 
}

showSlides();