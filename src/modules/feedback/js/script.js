$(document).ready(function () {

	moreButton();
	sendForms();

	function moreButton () {
		$('.feed_others_block_more').click(function () {
			$('.feed_others_block').fadeIn(500);
			$('.feed_others_block_more').hide();
		})
	}

	function sendForms () {
		$("#form").submit(function (e) {
			e.preventDefault();
			 var form_data = $(this).serialize();
			 var text = $('.input_text').val().length;
			 $.ajax({
				 type: "POST",
				 url: "modules/feedback/update.php",
				 cache: false,
				 data: form_data,
				 success: function () {
					 if (text <= 0) {
						 $('.form_alert').html('Сообщение не может быть пустым!');
						 $('.form_alert').fadeIn(500);
						 $('.form_alert').delay(2000);
						 $('.form_alert').fadeOut(500);
					 } else {
						 $('.input_submit').prop('disabled', true);
						 $('.form_alert').html('Спасибо за отзыв!<br>После модерации он будет опубликован в данном разделе.');
						 $('.form_alert').fadeIn(500);
					   setTimeout(function () {
						   location.reload();
					   }, 3000);
					 }
				 }
			 });
	   });
	
	   $(document).on("submit", "#publish", function (e) {
			e.preventDefault();
			 var form_data = $(this).serialize();
			 $.ajax({
				 type: "POST",
				 url: "modules/feedback/update.php",
				 cache: false,
				 data: form_data,
				 success: function () {
					 location.reload();
				 },
				 error: function () {
				   alert('error');
				 }
			 });
	   });
	}

});