jQuery(document).ready(function($){
	var intervalID = setInterval(function () {
        switchNext();
    }, 3000);


	var slideCount = jQuery('#slider ul li').length;
	var slideWidth = jQuery('#slider ul li').width();
	var slideHeight = jQuery('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;

	jQuery('#slider').css({ width: slideWidth, height: slideHeight });
	jQuery('#slider ul').css({ width: sliderUlWidth});
    jQuery('#slider ul li').css({ width: slideWidth});
    //jQuery('#slider ul li:last-child').prependTo('#slider ul');

    function switchPrev() {
        jQuery('#slider ul').animate({
            left: + slideWidth
        }, 1000, function () {
            jQuery('#slider ul li:last-child').prependTo('#slider ul');
            jQuery('#slider ul').css('left', '');
        });
    };

    function switchNext() {
        jQuery('#slider ul').animate({
            left: - slideWidth
        }, 1000, function () {
            jQuery('#slider ul li:first-child').appendTo('#slider ul');
            jQuery('#slider ul').css('left', '');
        });
    };

    jQuery('a.slide_prev').click(function () {
    	clearInterval(intervalID);
        switchPrev();
        intervalID = setInterval(function () {
        switchNext();
    	}, 3000);
    });

    jQuery('a.slide_next').click(function () {
    	clearInterval(intervalID);
        switchNext();
        intervalID = setInterval(function () {
        switchNext();
    	}, 3000);
    });
});