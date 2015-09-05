var $ = jQuery.noConflict();

$(document).ready(function($) {
	"use strict";
	//Skills animate
	$('.skill-bar-content').each(function(){
		$(this).delay(300).animate({'width': $(this).attr('data-value') + '%'}, 800);
	});
});