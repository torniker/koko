// import Pjax from 'pjax';
// new Pjax({
//     elements: "a", // default is "a[href], form[action]" 
//     selectors: ["title", ".my-Header", ".my-Content", ".my-Sidebar"]
// })
$(function() {

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