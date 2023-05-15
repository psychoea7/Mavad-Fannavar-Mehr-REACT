import $ from "jquery";
$(".owl").owlCarousel({
  rtl: true,
  loop: true,
  nav: true,
  navText: [
    "<i class='bx bxs-right-arrow-square'></i>",
    "<i class='bx bxs-left-arrow-square'></i>",
  ],
  dots: false,
  autoplaySpeed: 300,
  autoplay: true,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 1,
    },
    768: {
      items: 1,
    },
    1200: {
      items: 1,
    },
  },
});

$(".owl-carousel").owlCarousel({
  rtl: true,
  loop: true,
  nav: false,
  dots: true,
  autoplaySpeed: 300,
  autoplay: true,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 1,
    },
    768: {
      items: 1,
    },
    1200: {
      items: 1,
    },
  },
});
