$(document).ready(function () {

	workHover();
	addWorkToggle();
	deleteWork();

	function workHover () {
		$('.case').hover(function () {
			let block = 'div[data-id="' + $(this).data("id") + '"]';
			$('.mask[data-id="' + $(this).data("id") + '"]').fadeToggle(200);
			$('.textblock[data-id="' + $(this).data("id") + '"]').slideToggle(200);
		});
	}

	function addWorkToggle () {
		$('.add_work_title').click(function () {
			$('.add_work_container').slideToggle();
		});
	}

	function deleteWork () {
		$('.delete_button').click(function () {
			accept = confirm('Вы точно хотите удалить данную запись?');
			if (accept == true) {
				var form_data = $('#delete').serialize();
				  $.ajax({
				  type: "POST",
				  url: "modules/works/update.php",
				  cache: false,
				  data: form_data,
				  success: function () {
					location.reload();
				  }
				  });
				  return false;
			} else if (accept == false) {
				return false;
			}
		});
	}

});