
//masonry

//jQuery(window).load(function(){
 //   $('.elements-gride').masonry({
        // options
 //       itemSelector: '.element-item',
 //       columnWidth: '.persent-size',
  //      percentPosition: true
  //  });
//});

// jQuery to collapse the navbar on scroll //
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
			$('.navbar-fixed-top').fadeIn();
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
			
    }
});






/* HTML document is loaded. DOM is ready. 
-------------------------------------------*/
$(function(){
	
	
	//колонки
	// $('.col-cell').matchHeight();
	
	 // NIVO LIGHTBOX
  $('.iso-box-section a.mosaic').nivoLightbox({
        effect: 'fadeScale',
    });
	
	 // NIVO LIGHTBOX-2
  $('.light-model a').nivoLightbox({
        effect: 'fadeScale',
    });
	
	  // ------- WOW ANIMATED ------ //
  wow = new WOW(
  {
    mobile: false
  });
  wow.init();
	
	
// HIDE MOBILE MENU AFTER CLIKING ON A LINK
  $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });
 

	//top-slider
	$('.slider-river').slick({
		
    autoplay: true,
		autoplaySpeed: 4000
		
    });
	
	//liv-slider
	$('.slider-liv').slick({
		
    autoplay: true,
		autoplaySpeed: 4000
		
   });
	
	//otdel-slider
	$('.slider-otdel').slick({
		
    autoplay: true,
		autoplaySpeed: 4000
		
   });
	//otdel-slider
	$('.slider-apartament').slick({
		
    autoplay: true,
		autoplaySpeed: 4000
		
   });
	
	
	  /* ---------------------------------------------- /*
		 * Navbar
		/* ---------------------------------------------- */

		//$('.header').sticky({
			//topSpacing: 0
//});

		$('body').scrollspy({
			target: '.navbar-collapse',
			offset: 70
		})
  
  //Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

	//Кнопка наверх
		$(function() {
			$(window).scroll(function() {
			if($(this).scrollTop() != 0) {
			$('#top').fadeIn();
			} else {
			$('#top').fadeOut();
		}
	});
			$('#top').click(function() {
			$('body,html').animate({scrollTop:0},800);
		});
	});
	
	//Параллакс .prices
	$('.top_banner').parallax("50%", 0.3);
	$('.services').parallax("50%", 0.1);
	//$('.prices').parallax("50%", 0.1);
	
	//маска телефона
	$(".phone").mask("+7-999-999-9999", {
	placeholder: "_"
});
	
	
	
	//отправка форм
	$('.form').submit(function (e) {
		e.preventDefault();
		var $form = $(this);
		$form.append("<div class='sending'><em>отправка...</em></div>");
		$.ajax({
			type: 'POST',
			url: 'sendmessage.php',
			data: $form.serialize(),
			success: function (data) {
				if (data == "true") {
					$('.text-field').val('');
					document.location.href = 'thanks.html'
				}
			}
		});
	});
	
});





