import $ from 'jquery';
// $('.navTrigger').click(function () {
//     $(this).toggleClass('active');
//     console.log("Clicked menu");
//     $("#mainListDiv").toggleClass("show_list");
//     $("#mainListDiv").fadeIn();

// });
// $(window).scroll(function() {
//     if ($(document).scrollTop() > 50) {
//         $('.nav').addClass('affix');
//         console.log("OK");
//     } else {
//         $('.nav').removeClass('affix');
//     }
// });
// Owl Carousel Dots Position ---------------------------------
var dots = $('.owl-dots').css('position', 'absolute').css('bottom', '5px');
dots.css('left', 'calc(50% - ' + dots.width()/2+'px)');

// Back To Top Button -------------------------------------------
// mybutton = document.getElementById("myBtn");

// // When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     mybutton.style.display = "block";
//   } else {
//     mybutton.style.display = "none";
//   }
// }

// function topFunction() {
//     document.body.scrollTop = 0; // For Safari
//     document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
//   }