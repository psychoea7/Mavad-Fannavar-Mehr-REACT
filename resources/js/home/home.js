window.$ = window.jQuery = require('jquery');
window.Shuffle = require('shufflejs');
require('../../files/bootstrap-4.5.3-dist/js/bootstrap.bundle');
require('jquery-mousewheel');
require('../home/js/jquery-migrate');
require('../home/js/jquery.backstretch');
require('../home/js/jquery.waypoints');
require('./js/jquery.mCustomScrollbar');
require('./js/owl-carousel-min');
require('./js/owl-custom-main');
require('../../../node_modules/leaflet/dist/leaflet');
// require('../../../node_modules/leaflet-providers/leaflet-providers');
// require('../../../node_modules/owl.carousel2.thumbs/dist/owl.carousel2.thumbs');



function scroll_to(clicked_link, nav_height) {
    var element_class = clicked_link.attr('href').replace('#', '.');
    var scroll_to = 0;
    if (element_class != '.top-content') {
        element_class += '-container';
        scroll_to = $(element_class).offset().top - nav_height;
    }
    if ($(window).scrollTop() != scroll_to) {
        $('html, body').stop().animate({ scrollTop: scroll_to }, 1000);
    }
}


jQuery(document).ready(function () {

    /*
        Sidebar
    */
    $('.dismiss, .overlay').on('click', function () {
        $('.sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('.open-menu').on('click', function (e) {
        e.preventDefault();
        $('.sidebar').addClass('active');
        $('.overlay').addClass('active');
        // close opened sub-menus
        $('.collapse.show').toggleClass('show');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
    /* change sidebar style */
    $('a.btn-customized-light').on('click', function (e) {
        e.preventDefault();
        $('.sidebar').removeClass('light');
    });
    $('a.btn-customized-dark').on('click', function (e) {
        e.preventDefault();
        $('.sidebar').addClass('light');
    });
    /* replace the default browser scrollbar in the sidebar, in case the sidebar menu has a height that is bigger than the viewport */
    $('.sidebar').mCustomScrollbar({
        theme: "minimal-dark"
    });

    /*
        Navigation
    */
    $('a.scroll-link').on('click', function (e) {
        e.preventDefault();
        scroll_to($(this), 0);
    });

    $('.to-top a').on('click', function (e) {
        e.preventDefault();
        if ($(window).scrollTop() != 0) {
            $('html, body').stop().animate({ scrollTop: 0 }, 1000);
        }
    });
    /* make the active menu item change color as the page scrolls up and down */
    /* we add 2 waypoints for each direction "up/down" with different offsets, because the "up" direction doesn't work with only one waypoint */
    $('.section-container').waypoint(function (direction) {
        if (direction === 'down') {
            $('.menu-elements li').removeClass('active');
            $('.menu-elements a[href="#' + this.element.id + '"]').parents('li').addClass('active');
            //console.log(this.element.id + ' hit, direction ' + direction);
        }
    },
        {
            offset: '0'
        });
    $('.section-container').waypoint(function (direction) {
        if (direction === 'up') {
            $('.menu-elements li').removeClass('active');
            $('.menu-elements a[href="#' + this.element.id + '"]').parents('li').addClass('active');
            //console.log(this.element.id + ' hit, direction ' + direction);
        }
    },
        {
            offset: '-5'
        });

    /*
        Background slideshow
    */
    $('.top-content').backstretch("/images/backgrounds/1.jpg");
    $('.section-4-container').backstretch("/images/backgrounds/2.jpg");
    $('.section-6-container').backstretch("/images/backgrounds/1.jpg");

    /*
        Wow
    */
    new WOW().init();

    /*
        Contact form
    */
    $('.section-6-form form input[type="text"], .section-6-form form textarea').on('focus', function () {
        $('.section-6-form form input[type="text"], .section-6-form form textarea').removeClass('input-error');
    });
    $('.section-6-form form').submit(function (e) {
        e.preventDefault();
        $('.section-6-form form input[type="text"], .section-6-form form textarea').removeClass('input-error');
        var postdata = $('.section-6-form form').serialize();
        $.ajax({
            type: 'POST',
            url: 'assets/contact.php',
            data: postdata,
            dataType: 'json',
            success: function (json) {
                if (json.emailMessage != '') {
                    $('.section-6-form form .contact-email').addClass('input-error');
                }
                if (json.subjectMessage != '') {
                    $('.section-6-form form .contact-subject').addClass('input-error');
                }
                if (json.messageMessage != '') {
                    $('.section-6-form form textarea').addClass('input-error');
                }
                if (json.emailMessage == '' && json.subjectMessage == '' && json.messageMessage == '') {
                    $('.section-6-form form').fadeOut('fast', function () {
                        $('.section-6-form').append('<p>Thanks for contacting us! We will get back to you very soon.</p>');
                        $('.section-6-container').backstretch("resize");
                    });
                }
            }
        });
    });

});

 //trigger numbers
//  $(allInView);
//  $(window).scroll(allInView);

//  function isScrolledIntoView(elem) {
//      var docViewTop = $(window).scrollTop();
//      var docViewBottom = docViewTop + $(window).height();

//      var elemTop = $(elem).offset().top;
//      var elemBottom = elemTop + $(elem).height();

//      return elemBottom <= docViewBottom && elemTop >= docViewTop;
//  }

 // Numbers Count Update -------------------------------------
//  const items = [...document.querySelectorAll(".number")];

//  const updateCount = (el) => {
//      const value = parseInt(el.dataset.value);
//      const increment = Math.ceil(value / 1000);
//      // const increment = 1;
//      let initialValue = 0;

//      const increaseCount = setInterval(() => {
//          initialValue += increment;

//          if (initialValue > value) {
//              el.textContent = `${value.toLocaleString("ar-EG")}+`;
//              clearInterval(increaseCount);
//              return;
//          }

//          el.textContent = `${initialValue.toLocaleString("ar-EG")}+`;
//      }, 1);
//      // console.log(increaseCount);
//  };
 // Trigger Numbers Function -----------------------------------------------
//  let once = true;

//  function allInView() {
//      if (once) {
//          if (isScrolledIntoView($("#numbers"))) {
//              items.forEach((item) => {
//                  updateCount(item);
//              });
//              once = false;
//          }
//      }
//  }

//  Shuffle.js
var Shuffle = window.Shuffle;

class Demo {
  constructor(element) {
    this.element = element;
    this.shuffle = new Shuffle(element, {
      itemSelector: '.picture-item',
      sizer: element.querySelector('.my-sizer-element'),
    });

    // Log events.
    this.addShuffleEventListeners();
    this._activeFilters = [];
    this.addFilterButtons();
    this.addSorting();
    this.addSearchFilter();
  }

  /**
   * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
   * for them like you normally would (with jQuery for example).
   */
  addShuffleEventListeners() {
    this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {
      console.log('layout. data:', data);
    });
    this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {
      console.log('removed. data:', data);
    });
  }

  addFilterButtons() {
    const options = document.querySelector('.filter-options');
    if (!options) {
      return;
    }

    const filterButtons = Array.from(options.children);
    const onClick = this._handleFilterClick.bind(this);
    filterButtons.forEach((button) => {
      button.addEventListener('click', onClick, false);
    });
  }

  _handleFilterClick(evt) {
    const btn = evt.currentTarget;
    const isActive = btn.classList.contains('active');
    const btnGroup = btn.getAttribute('data-group');

    this._removeActiveClassFromChildren(btn.parentNode);

    let filterGroup;
    if (isActive) {
      btn.classList.remove('active');
      filterGroup = Shuffle.ALL_ITEMS;
    } else {
      btn.classList.add('active');
      filterGroup = btnGroup;
    }

    this.shuffle.filter(filterGroup);
  }

  _removeActiveClassFromChildren(parent) {
    const { children } = parent;
    for (let i = children.length - 1; i >= 0; i--) {
      children[i].classList.remove('active');
    }
  }

  addSorting() {
    const buttonGroup = document.querySelector('.sort-options');
    if (!buttonGroup) {
      return;
    }
    buttonGroup.addEventListener('change', this._handleSortChange.bind(this));
  }

  _handleSortChange(evt) {
    // Add and remove `active` class from buttons.
    const buttons = Array.from(evt.currentTarget.children);
    buttons.forEach((button) => {
      if (button.querySelector('input').value === evt.target.value) {
        button.classList.add('active');
      } else {
        button.classList.remove('active');
      }
    });

    // Create the sort options to give to Shuffle.
    const { value } = evt.target;
    let options = {};

    function sortByDate(element) {
      return element.getAttribute('data-created');
    }

    function sortByTitle(element) {
      return element.getAttribute('data-title').toLowerCase();
    }

    if (value === 'date-created') {
      options = {
        reverse: true,
        by: sortByDate,
      };
    } else if (value === 'title') {
      options = {
        by: sortByTitle,
      };
    }
    this.shuffle.sort(options);
  }

  // Advanced filtering
  addSearchFilter() {
    const searchInput = document.querySelector('.js-shuffle-search');
    if (!searchInput) {
      return;
    }
    searchInput.addEventListener('keyup', this._handleSearchKeyup.bind(this));
  }

  /**
   * Filter the shuffle instance by items with a title that matches the search input.
   * @param {Event} evt Event object.
   */
  _handleSearchKeyup(evt) {
    const searchText = evt.target.value.toLowerCase();
    this.shuffle.filter((element, shuffle) => {
      // If there is a current filter applied, ignore elements that don't match it.
      if (shuffle.group !== Shuffle.ALL_ITEMS) {
        // Get the item's groups.
        const groups = JSON.parse(element.getAttribute('data-groups'));
        const isElementInCurrentGroup = groups.indexOf(shuffle.group) !== -1;
        // Only search elements in the current group
        if (!isElementInCurrentGroup) {
          return false;
        }
      }
      const titleElement = element.querySelector('.skill-card__title');
      const titleText = titleElement.textContent.toLowerCase().trim();
      return titleText.indexOf(searchText) !== -1;
    });
  }
}



document.addEventListener('DOMContentLoaded', () => {
  window.demo = new Demo(document.getElementById('grid'));
});


// Leaflet Map
var lat = 35.68177;
        var lng = 51.30004;
        var map = L.map('map', {
            center: [lat, lng],
            zoom: 15
        });
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: false
        }).addTo(map);

        var marker = L.marker([lat, lng]).addTo(map)
            .openPopup();




