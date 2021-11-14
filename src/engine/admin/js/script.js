$(document).ready(function () {
    editButtonName();
    editButtonEmail();
    editButtonRegdate();
    editButtonIp();

    function editButtonName () {
        var status = false;

        $('.edit_button.name').click(function () {
            if (status == false) {
                $(this).prev().children('input').prop('disabled', false);
                $(this).prev().children('input').addClass('selected');
                $(this).css({
                    'background': '#229a6e'
                });
                $(this).children('.switch').css({
                    'left': '16px'
                });
                status = true; 
            } else if (status == true) {
                $(this).prev().children('input').prop('disabled', true);
                $(this).prev().children('input').removeClass('selected');
                $(this).css({
                    'background': 'gray'
                });
                $(this).children('.switch').css({
                    'left': '1px'
                });
                status = false;
            }
        }); 
    }

    function editButtonEmail () {
        var status = false;

        $('.edit_button.email').click(function () {
            if (status == false) {
                $(this).prev().children('input').prop('disabled', false);
                $(this).prev().children('input').addClass('selected');
                $(this).css({
                    'background': '#229a6e'
                });
                $(this).children('.switch').css({
                    'left': '16px'
                });
                status = true; 
            } else if (status == true) {
                $(this).prev().children('input').prop('disabled', true);
                $(this).prev().children('input').removeClass('selected');
                $(this).css({
                    'background': 'gray'
                });
                $(this).children('.switch').css({
                    'left': '1px'
                });
                status = false;
            }
        }); 
    }

    function editButtonRegdate () {
        var status = false;

        $('.edit_button.regdate').click(function () {
            if (status == false) {
                $(this).prev().children('input').prop('disabled', false);
                $(this).prev().children('input').addClass('selected');
                $(this).css({
                    'background': '#229a6e'
                });
                $(this).children('.switch').css({
                    'left': '16px'
                });
                status = true; 
            } else if (status == true) {
                $(this).prev().children('input').prop('disabled', true);
                $(this).prev().children('input').removeClass('selected');
                $(this).css({
                    'background': 'gray'
                });
                $(this).children('.switch').css({
                    'left': '1px'
                });
                status = false;
            }
        }); 
    }

    function editButtonIp () {
        var status = false;

        $('.edit_button.ip').click(function () {
            if (status == false) {
                $(this).prev().children('input').prop('disabled', false);
                $(this).prev().children('input').addClass('selected');
                $(this).css({
                    'background': '#229a6e'
                });
                $(this).children('.switch').css({
                    'left': '16px'
                });
                status = true; 
            } else if (status == true) {
                $(this).prev().children('input').prop('disabled', true);
                $(this).prev().children('input').removeClass('selected');
                $(this).css({
                    'background': 'gray'
                });
                $(this).children('.switch').css({
                    'left': '1px'
                });
                status = false;
            }
        }); 
    }

});