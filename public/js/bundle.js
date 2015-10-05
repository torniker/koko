(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

$(function () {
    fixHeaderOffset();
});
$(window).on("scroll touchmove", function () {
    $('#header').toggleClass('small', $(document).scrollTop() > 55);
});
$(window).resize(function () {
    fixHeaderOffset();
});

function fixHeaderOffset() {
    var parent = $('#header').parent();
    var parentOffset = parent.offset();
    $('#header').css('left', parentOffset.left + 15 + 'px');
    $('#header').css('width', parent.width() + 'px');
}

},{}]},{},[1]);
