$(document).ready(function(){
	
    $('.head-desc_slider').slick({
        dots: true,
        arrows: true,
		autoplay: true,
  		autoplaySpeed: 3000,
    });
	
	
//	respond-slider
	
	$('.respond-slider').slick({
	  slidesToShow: 2,
		responsive: [
    {
      breakpoint: 1050,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
	});
	
	var respondTeleport = $('.respond-slider .slick-current').find('.respond-slider_teleport-wrap').html();
	$('.respond-slider_content').html(respondTeleport);
	
	$('.more-btn').on('click',function(e){
		e.preventDefault();
		
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).text('Читать далее');
			$('.respond-slider_title').show();
			$('.respond-slider_text').hide();
		}
		else{
			$(this).addClass('active');
			$(this).text('Свернуть');
			$('.respond-slider_title').hide()
			$('.respond-slider_text').show();
		}
	});
	
	$('.respond-slider .slick-arrow').on('click', function(){
		var respondTeleport = $('.respond-slider .slick-current').find('.respond-slider_teleport-wrap').html();
		$('.respond-slider_content').html(respondTeleport);
		
		var moreBtn = $('.respond-slider_content').find('.more-btn');
		var ordrBtn = $('.respond-slider_content').find('.respond-order_btn');
		
		$('.respond-slider_title').show();
		$('.respond-slider_text').hide();
		
		$(moreBtn).on('click', function(e){
			e.preventDefault();
			if($(this).hasClass('active')){
				$(this).removeClass('active');
				$(this).text('Читать далее');
				$('.respond-slider_title').show();
				$('.respond-slider_text').hide();
			}
			else{
				$(this).addClass('active');
				$(this).text('Свернуть');
				$('.respond-slider_title').hide()
				$('.respond-slider_text').show();
			}
		});
		
		$(ordrBtn).on('click', function(e){
			e.preventDefault();
			var id  = $('#format-block'),
				top = $(id).offset().top;
			$('body,html').animate({scrollTop: top}, 1000);
		});
	});
	
	$('.respond-slider').on('swipe', function(){
		var respondTeleport = $('.respond-slider .slick-current').find('.respond-slider_teleport-wrap').html();
		$('.respond-slider_content').html(respondTeleport);
		
		var moreBtn = $('.respond-slider_content').find('.more-btn');
		var ordrBtn = $('.respond-slider_content').find('.respond-order_btn');
		
		$('.respond-slider_title').show();
		$('.respond-slider_text').hide();
		
		$(moreBtn).on('click', function(e){
			e.preventDefault();
			if($(this).hasClass('active')){
				$(this).removeClass('active');
				$(this).text('Читать далее');
				$('.respond-slider_title').show();
				$('.respond-slider_text').hide();
			}
			else{
				$(this).addClass('active');
				$(this).text('Свернуть');
				$('.respond-slider_title').hide()
				$('.respond-slider_text').show();
			}
		});
		
		$(ordrBtn).on('click', function(e){
			e.preventDefault();
			var id  = $('#format-block'),
				top = $(id).offset().top;
			$('body,html').animate({scrollTop: top}, 1000);
		});
	});
	
	var currentSlide = $('.respond-slider').slick('slickCurrentSlide') + 1;
	var slideTarg = $('.respond-slider_numb .numb');
	if(currentSlide < 10){
			slideTarg.html('0' + currentSlide);
		}
		else{
			slideTarg.html(currentSlide);
		}
	
	$('.respond-slider .slick-arrow').on('click', function(){
		var currentSlide = $('.respond-slider').slick('slickCurrentSlide') + 1;
		var slideTarg = $('.respond-slider_numb .numb');
		if(currentSlide < 10){
			slideTarg.html('0' + currentSlide);
		}
		else{
			slideTarg.html(currentSlide);
		}
	});
	
	$('.respond-slider').on('swipe', function(){
		var currentSlide = $('.respond-slider').slick('slickCurrentSlide') + 1;
		var slideTarg = $('.respond-slider_numb .numb');
		if(currentSlide < 10){
			slideTarg.html('0' + currentSlide);
		}
		else{
			slideTarg.html(currentSlide);
		}
	});
	
	
	
	
	
	var vinW = $(window).width() + 17;
	if(vinW < 1050){
		$('.slick-remove').remove();
		$('.garanty-block_img').appendTo( $('.garanty-block_teleport') );
		$('.order-btn2').appendTo( $('.partic-block_teleport') );
	}
	
	$('.program-slider').slick({
        dots: false,
        arrows: true,
		slidesToShow: 3,
		draggable: false,
		centerMode: true,
	    centerPadding: '0px',
		initialSlide: 1,
		autoplay: true,
  		autoplaySpeed: 4000,
		responsive: [
		{
		  breakpoint: 1050,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			centerMode: false,
			dots: true,
			draggable: true
		  }
		}]
    });
	
	

	
	$('.author-slider').slick({
        arrows: true,
		slidesToShow: 1
    });
	
	$('.contacts-slider').slick({
        arrows: true,
		dots: true,
		slidesToShow: 1
    });
	
	var respondTeleport2 = $('.contacts-slider .slick-current').find('.contacts-slider_teleport').html();
	$('.contacts-slider_content').html(respondTeleport2);
	
	
	$('.contacts-slider').on('afterChange', function(){
		
		var respondTeleport2 = $('.contacts-slider .slick-current').find('.contacts-slider_teleport').html();
		$('.contacts-slider_content').html(respondTeleport2);
	});

	
	// -------------------------------------------------------------
	//   Basic Navigation
	// -------------------------------------------------------------
	(function () {
		var $frame  = $('#basic');
		var $slidee = $frame.children('ul').eq(0);
		var $wrap   = $frame.parent();

		// Call Sly on frame
		$frame.sly({
			horizontal: 1,
			itemNav: 'basic',
			smart: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 0,
			scrollBar: $wrap.find('.result3-scrollbar'),
			scrollBy: 0,
			activatePageOn: 'click',
			speed: 700,
			elasticBounds: 1,
			easing: 'easeOutExpo',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,
		});

	}());
	
	
	$(".order-block_packet-unit").on("click", function(){
        if($(this).hasClass('active')){
            $(this).removeClass("active");
        }else{
            $(".order-block_packet-unit").removeClass("active");
            $(this).addClass("active");
        }
    });
	
	$('.checkboxes').find('.check').click(function(){
	
        if( $(this).find('input').is(':checked') ) {
            $(this).find('.check-icon').removeClass('active');
            $(this).find('input').removeAttr('checked');
        } else {
            $(this).find('.check-icon').addClass('active');
            $(this).find('input').attr('checked', true);
        }
    });
	
	function packetSelect(){
		var packetVal = $('.order-block_packet-unit.active').text();
		var packetDat = $('.order-block_packet-unit.active').data('unit');
		var packetBtn = $('.order-block_form_btn span');
		var inpHid = $('.order-block_hid');
		packetBtn.html(packetVal);
		inpHid.val(packetDat);
	}
	packetSelect();
	
	$('.order-block_packet-unit').on('click', function(){
		packetSelect(); 
	});
	
	
	$('.drawer').drawer();
    
    $('.drawer-menu-item').on('click', function(){
        $('.drawer').drawer('close');
    });
    
	
	$(".head-nav, .drawer-menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });
	
	$(".ordr-btn, .order-btn2, .respond-order_btn").on("click", function (event) {
        event.preventDefault();
        var id  = $('#format-block'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });
    
    $(".grouped_elements").fancybox();
	
	
	// video fancybox
    $('.fancybox-media').fancybox({
		openEffect  : 'none',
        autoSize    : true,
		closeEffect : 'none',
        height  : '500',
		helpers : {
			media : {}
		}
	});
    
    var small_guide = false;

	$(".page-head_video a").click(function(event) {
		small_guide = true;
	});
	
	
	
	/* --new-acc-modal-- */
    
$('.format-box_nomoney a').click( function(event){
		event.preventDefault();
		$('#overlay').fadeIn(300,
		 	function(){
				$('#new-acc-modal') 
					.css('display', 'block')
					.animate({opacity: 1, top: '50%'}, 200);
		});
	});
	
	$('#modal_close, #overlay').click( function(){
		$('#new-acc-modal')
			.animate({opacity: 0, top: '45%'}, 200,
				function(){
					$(this).css('display', 'none');
					$('#overlay').fadeOut(300);
				}
			);
	});
    
    $('#quiz-overlay, .modal-close').click( function(){
		$('.quiz-modal_main').remove();
        $('#quiz-overlay').remove();
        $('.quiz-spec').fadeOut();
        $('.quiz-incom').fadeOut();
        $('.quiz-durat').fadeOut();
        $('.quiz-price').fadeOut();
        $('.quiz-days').fadeOut();
        $('.quiz-rab').fadeOut();
        $('.quiz-result1').fadeOut();
        $('.quiz-result2').fadeOut();
        $('.quiz-result3').fadeOut();
        $('#overlay').fadeOut();
	});
    
    
    // Quiz-radioButton
	$('.quiz-radio_box').find('.quiz-radio').each(function(){
		$(this).click(function(){
			var valueRadio = $(this).html();
			$('.quiz-radio_box').find('.quiz-radio').removeClass('active');
			$(this).addClass('active');
			$('#quiz-spec').val(valueRadio);
		});
	});
    
    $('.quiz-incom_unit').on('click', function(){
        if($(this).hasClass('active')){
            $(this).removeClass('active');
        }
        else{
            $(this).addClass('active').siblings().removeClass('active');
            $('#quiz-incom').val($(this).text());
        }
    });
    
    $('.quiz-durat_time').on('click', function(){
        if($(this).hasClass('active')){
            $(this).removeClass('active');
        }
        else{
            $(this).addClass('active').siblings().removeClass('active');
            $('#quiz-durat').val($(this).text());
        }
    });
    
    $('.quiz-rab_time').on('click', function(){
        if($(this).hasClass('active')){
            $(this).removeClass('active');
        }
        else{
            $(this).addClass('active').siblings().removeClass('active');
            $('#quiz-rab').val($(this).text());
        }
    });
    
    $('.quiz-modal_main-btn').on('click', function(){
        $('.quiz-modal_main').fadeOut();
        $('.quiz-spec').fadeIn();
    });
    
    $('.quiz-spec_btn').on('click', function(){
        $('.quiz-spec').fadeOut();
        $('.quiz-incom').fadeIn();
    });
    
    $('.quiz-incom_btn').on('click', function(){
        $('.quiz-incom').fadeOut();
        $('.quiz-durat').fadeIn();
    });
    
    $('.quiz-durat_btn').on('click', function(){
        $('.quiz-durat').fadeOut();
        $('.quiz-price').fadeIn();
    });
    
    $('.quiz-price_btn').on('click', function(){
        var thisInp = $('#quiz-modal_price').val();
        if(thisInp != ''){
            $('.quiz-price').fadeOut();
            $('.quiz-days').fadeIn();
        }
    });
    
    $('.quiz-days_btn').on('click', function(){
        var thisInp = $('#quiz-modal_days').val();
        if(thisInp != ''){
            $('.quiz-days').fadeOut();
            $('.quiz-rab').fadeIn();
        }
    }); 
    
    $('.quiz-result_btn').on('click', function(){
        var targPrice = $('#quiz-incom').val();
        if(targPrice == 'От 0 до 50 000 руб.'){
            $('.quiz-result1').fadeIn();
        }
        if(targPrice == 'От 50 000 до 100 000 руб.'){
            $('.quiz-result2').fadeIn();
        }
        if(targPrice == 'От 100 000 руб.'){
            $('.quiz-result3').fadeIn();
        }
        $('.quiz-modal').fadeOut();
    });
    
    $('.format-box_btn').on('click', function(){
        $('.quiz-result').fadeOut();
        $('#quiz-overlay').fadeOut();
    });
    
    function modalExit(){
//		var cookieOptions = { expires: 1, path: '/' };
//	  if ($.cookie('visit') == undefined) {
//		setTimeout(function() {
//		$.cookie('visit', true, cookieOptions);

		 $(document).mouseleave(function(a){
            $("#quiz-overlay").fadeIn();
			a.clientY<0&&$(".quiz-modal_main").fadeIn();
		});   

//	  }, 2000);
//	 }
	}
    
    var vinW = $(window).width() + 17;
	if(vinW >= 992){
		modalExit();
	}
	
	if(vinW < 992){
		
		setTimeout(function() {
			$("#quiz-overlay").fadeIn();
			$(".quiz-modal_main").fadeIn();
		}, 30000);

	}
	
});