var sent_card = false;
var mobile_breakpoint = 768;
var mobile_menu_open = false;


//Document-ready 
$(document).ready(function () {


	$(".logo_link").click(function() {  
		if (mobile_menu_open) {
		    close_mobile_menu();
		}
	});

	$("#menu_toggle").click(function() {  
	    mobile_menu_toggle();
	});

	$("#menu_toggle2").click(function() {  
	    mobile_menu_toggle();
	});

	$(".menu_li").click(function() {  
	    if ($("body").width() <= mobile_breakpoint && mobile_menu_open) {
	    	mobile_menu_toggle();
	    }
	});
	
	menu_scroll();
	 $('input[type="submit"]').attr('disabled','disabled');

	$('input').on('input',function(e){
		if($('#pin_code').val() == 080108 && $('#guest-1').val() != '' && $('#guest-email').val() != '' && $('#guest-phone').val() != '') {
			$('input[type="submit"]').removeAttr('disabled');
		}
	});


    $('#rsvp_form').bind("DOMSubtreeModified",function(){
	  if ($('.wpcf7-mail-sent-ok').length && !sent_card){
	  		sent_card = true;
	        send_card();
	    }
	});

	$(window).resize(function() {

		//show_menu(true);

		if (!sent_card) {
			$("#rsvp_form_now_what").css({'margin-top': "-" + ($("#rsvp_form").height()/2 + $("#rsvp_form_now_what").height()/2) + "px"});
		}
		//alert($(".check_ball").css('margin-left').replace('px', ''));
		if ($("body").width() <= mobile_breakpoint){

			$( ".cloud_ball" ).each(function() {
				$(this).css({'margin-left': '-' + ($(this).css('left').replace('px', '')/2.3) + 'px'});
			});
		} else {
			$( ".cloud_ball" ).each(function() {
				$(this).css({'margin-left': '0px'});
			});
		}
	});

	$("#rsvp_form_now_what").css({'margin-top': "-" + ($("#rsvp_form").height()/2 + $("#rsvp_form_now_what").height()/2) + "px"});

	$(window).scroll(function (event) {
		menu_scroll();
	});

	//"Scroll to"-function
	$(function(){
		$('a[href*=#]').click(function() {
			//alert(this.hash);
			if(this.hash.length != "#open_menu") {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		   		&& location.hostname == this.hostname) {
		       		var $target = $(this.hash);
		       		$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
		       		if ($target.length) {
		          		 var targetOffset = $target.offset().top;
		           		$('html,body').animate({scrollTop: targetOffset}, 1000);
		           		return false;
		       		}
		   		}
	   		}	
		});
	});

});

function menu_scroll() {

	var scroll = $(window).scrollTop();
    var hero_height = $("#hero").height()+300;

    if (scroll > hero_height) {
    	show_menu(true);
    } else {
    	show_menu(false);
    }
	
}

function show_menu(show) {

	if (show) {
		$('#menu').stop().animate({marginTop: "0px"}, 100);
		if ($("body").width() <= mobile_breakpoint && !mobile_menu_open) {
			$('#menu').css({"z-index": "400"});
		}
	} else {
		$('#menu').stop().animate({marginTop: "-80px"}, 100);
		if ($("body").width() <= mobile_breakpoint && !mobile_menu_open) {
			$('#menu').css({"z-index": "0"});
		}
	}
}

function send_card() {
	$("#rsvp_form").stop().animate({marginLeft: "100vw", opacity: "0.3"}, 700);
	$( "#rsvp_form" ).delay(600).hide(700);
	$('#rsvp_form_now_what').css({'margin-top': '0px'});
	$('#rsvp_form_now_what')
	  .delay(1400)
	  .queue( function(next){ 
	    $(this).stop().animate({opacity: "1"}, 400); 
	    next(); 
	  });
	//$("#rsvp_form_now_what").css({'margin-top': "-" + ($("#rsvp_form").height()/*/2 + $("#rsvp_form_now_what").height()/2*/) + "px"});
	//$("html, body").animate({ scrollTop: $('#rsvp').offset().top }, 500);
}



function mobile_menu_toggle() {
	if ($("body").width() <= mobile_breakpoint) {

		if (!mobile_menu_open) {
			//Öppna
			open_mobile_menu();
		} else if (mobile_menu_open) {
			//Stänga
			close_mobile_menu();
		}
	}
}


function open_mobile_menu() {
	$("#menu").addClass("open_menu");
	$("#menu_toggle").html("&#10005;");
	mobile_menu_open = true;
}


function close_mobile_menu() {
	$("#menu").removeClass("open_menu");
	$("#menu_toggle").html("&#9776;");
	mobile_menu_open = false;
}