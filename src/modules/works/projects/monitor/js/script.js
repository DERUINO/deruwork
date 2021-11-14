$('.slider1').click(function () {
	$('.active_fix').toggleClass('clicked');
});

$('.slider2').click(function () {
	$('.active_fix2').toggleClass('clicked2');
});

$('.slider3').click(function () {
	$('.active_fix3').toggleClass('clicked3');
});

$('.profile_close').click(function () {
	$('.profile_info').fadeOut(300);
});

$('.profile_fix').click(function () {
	$('.profile_info').fadeIn(300);
});

$('.events').click(function () {
	$('.mainpage').css('color', 'white');
	$('.firstblock').fadeOut(300);
	$('.secondblock').delay(300);
	$('.secondblock').fadeIn(300);
	$('.events').css('color', '#2FB0D7');
});

$('.mainpage').click(function () {
	$('.events').css('color', 'white');
	$('.secondblock').fadeOut(300);
	$('.firstblock').delay(300);
	$('.firstblock').fadeIn(300);
	$('.mainpage').css('color', '#2FB0D7');
});

$('.open1').click(function () {
	$('.opened1').slideToggle(300);
});

$('.open2').click(function () {
	$('.opened2').slideToggle(300);
});

$('.open3').click(function () {
	$('.opened3').slideToggle(300);
});