/* globals $:false, openWaitOverlay */
"use strict";
$(function() {
    $('#btnSubmit').click(function () {
        setTimeout(openWaitOverlay, 2000);
    });
	$('#accordionRiepilogo .collapse').on('shown.bs.collapse', function () {
	    var el = $(this);
	    $('html, body').animate({
	        scrollTop: el.offset().top - 200
	    }, 200);
	});
});
