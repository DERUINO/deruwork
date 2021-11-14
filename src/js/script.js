$(document).ready(function () {
    toggleAuth();
    toggleLostpass();
    toggleSidebar();
    toggleErrorform();
    toggleNotifications();
    toolbarColor();
});

function toggleAuth () {
    $('.open_auth').click(function () {
        $('.notification_list').hide();
        $('.authblock').slideToggle();
    });

    $('.close_auth').click(function () {
        $('.authblock').slideUp();
    });
}

function toggleSidebar () {
    $('.menu_button').click(function () {
        $('.sidebar').fadeIn();
    });

    $('.close_sidebar').click(function () {
        $('.sidebar').fadeOut();
    });
}

function toggleLostpass () {
    $('.lostpass_link').click(function () {
		$('.lost_password').slideToggle();
	});
}

function toggleErrorform () {
    $('.errorform_link').click(function () {
        $('.error_form_block').fadeIn();
    });

    $('.error_form_block .close_button').click(function () {
        $('.error_form_block').fadeOut();
    });
}

function toggleNotifications () {
    $('.profileblock__notification').click(function () {
        $('.authblock').hide();
        $('.notification_list').slideToggle();
    });
}

function toolbarColor () {
    $('.content').scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.toolbar').addClass('colored');
        } else {
            $('.toolbar').removeClass('colored');
        }
    });
}