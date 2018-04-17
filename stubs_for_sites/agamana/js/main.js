$().ready(function(){

		$().ready(function(){
			$(".overlap .more").click(function(e){
				e.preventDefault();
				$("body,html").animate({scrollTop: $(window).height()});
			});
		});
	
		// Activate countdownTimer plugin on a '.countdown' element
		$(".countdown").countdownTimer({
			// Set the end date for the countdown
			endTime: new Date("May 30, 2014 11:13:00 UTC+0200")
		});

		$('#notifyMe').ketchup().submit(function() {
		if ($(this).ketchup('isValid')) {
			var action = $(this).attr('action');
			$.ajax({
				url: action,
				type: 'POST',
				data: {
					email: $('#address').attr('value')
				},
				success: function(data){
					$('#result').html(data).css('color', 'green');
				},
				error: function() {
					$('#result').html('Sorry, an error occurred.').css('color', 'red');
				}
			});
		}
		return false;
	});

		
	});