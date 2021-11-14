$(document).ready(function () {
	
	updatePrice();
	sliders();
	hintsToggle();
	sendForms();
	phoneMask();

	function updatePrice() {
		var numb_start = $('#amount3').val();
		var price =
			+$('#amount1').val() * 500 +
			+$('#amount2').val() * 1000 +
			+$('[name="select"]:checked').toArray().reduce((sum, n) => sum + +$(n).val(), 0)
			+$('[name="select2"]:checked').toArray().reduce((sum, n) => sum + +$(n).val(), 0)
			+$('[name="select3"]:checked').toArray().reduce((sum, n) => sum + +$(n).val(), 0)
			+$('[name="select4"]:checked').toArray().reduce((sum, n) => sum + +$(n).val(), 0)
			+$('[name="select5"]:checked').toArray().reduce((sum, n) => sum + +$(n).val(), 0);
			$({numberValue: numb_start}).animate({numberValue: price}, {
				duration: 500,
				step: function(val) {
					$("#amount3").val(Math.ceil(val));
				}
			})
			
		$('[name="type"], [name="select"], [name="select2"], [name="select3"], [name="select4"], [name="select5"]').change(updatePrice);
	};

	function sliders () {
		$( "#polzunok-1" ).slider({
			value:1,
			min: 1,
			max: 50,
			range: "min",
			step: 1,
			slide: function( event, ui ) {
			  $( "#amount1" ).val( ui.value);
			  updatePrice();
			}
		  });
	  
		  $( "#polzunok-2" ).slider({
			value:1,
			min: 1,
			max: 25,
			range: "min",
			step: 1,
			slide: function( event, ui ) {
			  $( "#amount2" ).val( ui.value );
			  updatePrice();
			}
		  });
	}

	function hintsToggle () {
		$('.slides_title').click(function () {
			$('.slides_info').fadeToggle(300);
		});
	
		$('.screens_title').click(function () {
			$('.screens_info').fadeToggle(300);
		});
	
		$('.type_title').click(function () {
			$('.type_info').fadeToggle(300);
		});
	
		$('.engine_title').click(function () {
			$('.engine_info').fadeToggle(300);
		});
	
		$('.options_title').click(function () {
			$('.options_info').fadeToggle(300);
		});	
	}

	function sendForms () {
		$(".form").submit(function (e) {
			e.preventDefault();
			 var form_data = $(this).serialize();
			 $.ajax({
				 type: "POST",
				 url: "modules/calc/mail.php",
				 cache: false,
				 data: form_data,
				 success: function () {
					$('.form_alert').html('Заявка успешно отправлена, мы перезвоним вам в ближайшее время!');
					$('.form_alert').fadeIn(500);
					setTimeout(function () {
						location.reload();
					}, 3000);
				 }
			 });
	   });
	}

	function phoneMask () {
		$(".input_mask_number").inputmask("+7 (999) 999-99-99");
	}
});