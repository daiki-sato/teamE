"use strict";

var showDialog = function showDialog() {
  document.getElementById('modal').classList.add('show');
  var scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
  var body = document.body;
  body.style.position = 'fixed';
  body.style.top = "-".concat(scrollY);
};

var closeDialog = function closeDialog() {
  var body = document.body;
  var scrollY = body.style.top;
  window.scrollTo(0, parseInt(scrollY || '0') * -1);
  document.getElementById('modal').classList.remove('show');
};

window.addEventListener('scroll', function () {
  document.documentElement.style.setProperty('--scroll-y', "".concat(window.scrollY, "px"));
});