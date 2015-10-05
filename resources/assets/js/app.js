$(function() {
    fixHeaderOffset();
});
$(window).on("scroll touchmove", function () {
    $('#header').toggleClass('small', $(document).scrollTop() > 55);
});
$(window).resize(function() {
    fixHeaderOffset();
});

function fixHeaderOffset() {
    var parent = $('#header').parent();
    var parentOffset = parent.offset();
    $('#header').css('left',(parentOffset.left+15)+'px');
    $('#header').css('width', parent.width()+'px');
}