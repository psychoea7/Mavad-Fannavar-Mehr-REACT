window.$ = window.jQuery = require('jquery');
require('../../files/bootstrap-4.5.3-dist/js/bootstrap.bundle');
require('bootstrap-select');
var sideBar = document.getElementById('dw-s1');
document
  .getElementById('toggleSide')
  .addEventListener("click", function() {
    sideBar.classList.toggle('open-menu-toggle');
  });