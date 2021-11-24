/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/slider.js ***!
  \********************************/
var slider = document.querySelector('.gallery');
var scrollSpeed = 1;
var mouseDown = false;
var mousePositionX;
var scrollLeft;
slider.addEventListener('mousedown', function (event) {
  mouseDown = true;
  slider.classList.add('active');
  mousePositionX = event.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', function (_) {
  mouseDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', function (_) {
  mouseDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', function (event) {
  if (mouseDown === false) {
    return;
  }

  event.preventDefault();
  var positionX = event.pageX - slider.offsetLeft;
  var offsetX = (positionX - mousePositionX) * scrollSpeed;
  slider.scrollLeft = scrollLeft - offsetX;
});
/******/ })()
;