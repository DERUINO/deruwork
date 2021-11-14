$(document).ready(function () {
	$('.menu').click(function () {
		$('.static').css('overflow', 'hidden');
		$('.menu_opened').fadeIn(500);
	})

	$('.menu_close').click(function () {
		$('.static').css('overflow', 'auto');
		$('.menu_opened').fadeOut(500);
	})

	$('.start').click(function () {
		$('.mainblock').addClass('mobile_mainblock');
		$('.block').hide();
		$('.block2').show();
	})

	$('.choice_button').click(function () {
		$('.block2').fadeOut(500);
		$('.block3').delay(500);
		$('.block3').fadeIn(500);
	})

	$('.choice_more_button').click(function () {
		$('.block3').fadeOut(500);
		$('.block4').delay(500);
		$('.block4').fadeIn(500);
	})

	$('.change_pass').click(function () {
		$('.change_pass_block').fadeIn(300);
	})

	$('.test').click(function () {
		if ($(this).hasClass('t1')) {
			$('.test').html('test3');
			$('.test').addClass('t3');
		} else if ($(this).hasClass('t2')) {
			$('.test').html('test4');
			$('.test').addClass('t4');
			$('.test').click(function () {
				if ($('.test').hasClass('t4')) {
					alert('6');
				}
			});
		}
	});
})