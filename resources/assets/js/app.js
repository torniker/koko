import Pjax from 'pjax';
import NProgress from 'nprogress';
new Pjax({
    elements: 'a',
    selectors: ['#app', 'title']
});
document.addEventListener("pjax:success", function() {
    var root = new Vue(app);
});
document.addEventListener("pjax:send", function() {
    NProgress.start();
});
document.addEventListener("pjax:complete", function() {
    NProgress.done();
});
// $(document).on('pjax:start', function() { NProgress.start(); });
// $(document).on('pjax:end',   function() { NProgress.done();  });
import Vue from 'vue';
Vue.use(require('vue-resource'));
import app from './vue/app.vue';


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
            this.scrollable = $(settings.scrollable);
            this.container = $(settings.container);
            this.step = settings.step;
            this.setListeners();
        }
        setListeners() {
            this.leftArrow.on('click', this.leftArrowCallback.bind(this));
            this.rightArrow.on('click', this.rightArrowCallback.bind(this));
        }
        leftArrowCallback(e) {
            e.preventDefault();
            var scrollPos = this.container.scrollLeft();
            var width = this.scrollable.width();
            var scrollTo = scrollPos;
            if (width < this.step + scrollTo) {
                scrollTo = width;
            } else {
                scrollTo += this.step
            }
            this.scrollTo(scrollTo);
        }
        rightArrowCallback(e) {
            e.preventDefault();
            var scrollPos = this.container.scrollLeft();
            var scrollTo = scrollPos;
            if (this.scrollTo - this.step < 0) {
                scrollTo = 0;
            } else {
                scrollTo -= this.step
            }
            this.scrollTo(scrollTo);
        }
        scrollTo(scrollTo) {
            this.container.animate({
                scrollLeft: scrollTo
            }, 200);
        }
    }
}(jQuery));
$('.scroll-container').scrollRow({
    container: '.skill-list'
});