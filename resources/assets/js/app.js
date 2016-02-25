import Pjax from 'pjax';
import NProgress from 'nprogress';
import Vue from 'vue';
Vue.use(require('vue-resource'));
import app from './vue/app.vue';

new Pjax({
    elements: 'a',
    selectors: ['#app', 'title'],
    analytics: function() {
        window.ga('send', 'pageview', {
            page: document.location.pathname,
            title: document.title
        })
    }

});
var root = new Vue(app);
document.addEventListener("pjax:success", function() {
    root = new Vue(app);
});
document.addEventListener("pjax:send", function() {
    root.$destroy();
    NProgress.start();
});
document.addEventListener("pjax:complete", function() {
    NProgress.done();
});
(function($) {
    $.fn.scrollRow = function(options) {
        var settings = $.extend({
            leftArrow: '.arrow-left',
            rightArrow: '.arrow-right',
            container: '.scrollable-container',
            scrollable: '.scrollable',
            step: 300
        }, options);
        var sr = new ScrollRow(settings);
    };

    class ScrollRow {
        constructor(settings) {
            this.leftArrow = $(settings.leftArrow);
            this.rightArrow = $(settings.rightArrow);
            this.scrollable = settings.scrollable;
            this.container = settings.container;
            this.step = settings.step;
            $(document).on('click', settings.leftArrow, this.leftArrowCallback.bind(this));
            $(document).on('click', settings.rightArrow, this.rightArrowCallback.bind(this));
        }
        leftArrowCallback(e) {
            e.preventDefault();
            var scrollPos = $(this.container).scrollLeft();
            var width = $(this.scrollable).width();
            var scrollTo = scrollPos;
            if (width < this.step + scrollTo) {
                scrollTo = width;
            } else {
                scrollTo += this.step
            }
            this.scrollTo(scrollTo);
        }
        rightArrowCallback(e) {
            console.log('b');
            e.preventDefault();
            var scrollPos = $(this.container).scrollLeft();
            var scrollTo = scrollPos;
            if (this.scrollTo - this.step < 0) {
                scrollTo = 0;
            } else {
                scrollTo -= this.step
            }
            this.scrollTo(scrollTo);
        }
        scrollTo(scrollTo) {
            $(this.container).animate({
                scrollLeft: scrollTo
            }, 200);
        }
    }
}(jQuery));
$('.scroll-container').scrollRow({
    container: '.skill-list'
});