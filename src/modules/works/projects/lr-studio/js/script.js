$(document).ready(function () {
	$('.close_modal').click(function () {
		$('.modalblock').fadeOut(300);
	});

	$('.add_button').click(function () {
		$('.nameblock').append('<div class="name"><input class="new_input" type="text" placeholder="Имя поставщика"></div>');
	});

	$('.filterblock li').click(function () {
		$('.filterblock li').removeClass('selected');
		$(this).addClass('selected');
	});

	$('.yes_delivered').click(function () {
		$('.tbody').hide();
		$('.delivered').fadeIn();
	});

	$('.no_delivered').click(function () {
		$('.tbody').hide();
		$('.not_delivered').fadeIn();
	});

	$('.all_list').click(function () {
		$('.tbody').fadeIn();
	});
});