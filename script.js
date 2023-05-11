const header = document.querySelector('.header');

function fixedNavbar() {
    header.classList.toggle('scroll', window.pageYOffset > 0);
}
fixedNavbar();

window.addEventListener('scroll', fixedNavbar);
let menu = document.querySelector('#menu-btn');
let userBtn = document.querySelector('#user-btn');

menu.addEventListener('click', function() {
    let nav = document.querySelector('.navbar');
    nav.classList.toggle('active');
})

userBtn.addEventListener('click', function() {

    let userBox = document.querySelector('.user-box')
    userBox.classList.toggle('active');

})

// === home page slider =====

'use strict'

const leftArrow = document.querySelector('.left-arrow .bx-left-arrow');
const rightArrow = document.querySelector('.right-arrow .bx-right-arrow');
const Slider = document.querySelector('.slider');

// ===== scrol right =====

function scrollRight() {
    if(Slider.scrollWidth - Slider.clientWidth === Slider.scrollLeft) {
        Slider.scrollTo({
            left: 0,
            behavior: "smooth"
        });
    }else {
        Slider.scrollBy({
            left: window.innerWidth,
            behavior: "smooth"
        })
    }
}

// =========== scroll left ========

function scrollLeft() {
    Slider.scrollBy({
        left: -window.innerWidth,
        behavior: "smooth"
    })
}

let timerId = setInterval(scrollRight, 7000);


// ======= rest timer to scroll right ========

function restTimer() {
    clearInterval(timerId);
    timerId = setInterval(scrollRight, 7000
    );
}

// ======= scroll event  ==========

Slider.addEventListener('click', function(ev) {
    if(ev.target == leftArrow){
        scrollLeft();
        restTimer();
    }
})

Slider.addEventListener('click', function(ev) {
    if(ev.target == rightArrow){
        scrollRight()
        restTimer()
    }
})