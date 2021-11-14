<script type="text/javascript">

    function loginAuth () {
        $(document).on("submit", "#auth", function (e) {
            e.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "engine/login.php",
                cache: false,
                data: form_data,
                dataType: 'json',
                success: function (data) {
                    if (data.error) {
                        $('.form_alert').html(data.error);
                        $('.form_alert').fadeIn();
                        setTimeout(function () {
                            $('.form_alert').fadeOut();
                        }, 1500);
                    } else if (data.auth) {
                        $('.form_alert').html(data.auth);
                        $('.form_alert').fadeIn();
                        setTimeout(function () {
                            location.reload();
                        }, 1500);
                    }
                },
                error: function() {
                }
            });
        }); 
    }

    function lostPassword () {
        $(document).on("submit", "#lostpass", function (e) {
            e.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "engine/pass_token.php",
                cache: false,
                data: form_data,
                dataType: 'json',
                success: function (data) {
                    if (data.error) {
                        $('.form_alert').html(data.error);
                        $('.form_alert').fadeIn();
                        setTimeout(function () {
                            $('.form_alert').fadeOut();
                        }, 1500);
                    } else if (data.done) {
                        $('.form_alert').html(data.done);
                        $('.form_alert').fadeIn();
                        setTimeout(function () {
                            $('.form_alert').fadeOut();
                        }, 3000);
                    }
                },
                error: function() {
                }
            });
        });
    }

    function sendMainform () {
        $("#mainform").submit(function (e) {
            e.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "engine/mail.php",
                cache: false,
                data: form_data,
                success: function () {
                $('.form_alert').html('Заявка успешно отправлена, мы свяжемся с вами в ближайшее время!');
                $('.form_alert').fadeIn(500);
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
            });
        });
    }

    function changePassword () {
        $(document).on("submit", "#changepass", function (e) {
			e.preventDefault();
			var form_data = $(this).serialize();
			$.ajax({
				type: "POST",
				url: "engine/changepassword.php",
				cache: false,
				data: form_data,
				dataType: 'json',
				success: function (data) {
					if (data.mirror) {
						$('.form_alert').html(data.mirror);
						$('.form_alert').fadeIn();
						setTimeout(function () {
							$('.form_alert').fadeOut();
						}, 1500);
					} else if (data.empty) {
					$('.form_alert').html(data.empty);
					$('.form_alert').fadeIn();
					setTimeout(function () {
						$('.form_alert').fadeOut();
					}, 1500);
					} else if (data.change) {
						$('.form_alert').html(data.change);
						$('.form_alert').fadeIn();
						setTimeout(function () {
							window.location.replace('engine/logout.php');
						}, 1500);
					}
				},
				error: function() {
					alert('error');
				}
			});
		});
    }

    function registration () {
        $(document).on("submit", "#registration", function (e) {
            e.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "engine/registration.php",
                cache: false,
                data: form_data,
                dataType: 'json',
                success: function (data) {
                    if (data.password) {
                        $('.form_alert').html(data.password);
                        $('.form_alert').fadeIn();
                        setTimeout(function () {
                            $('.form_alert').fadeOut();
                        }, 1500);
                    } else if (data.format) {
                        $('.form_alert').html(data.format);
                        $('.form_alert').fadeIn();
                        setTimeout(function () {
                            $('.form_alert').fadeOut();
                        }, 1500);
                    } else if (data.email) {
                        $('.form_alert').html(data.email);
                        $('.form_alert').fadeIn();
                        setTimeout(function () {
                            $('.form_alert').fadeOut();
                        }, 1500);
                    } else if (data.name) {
                        $('.form_alert').html(data.name);
                        $('.form_alert').fadeIn();
                        setTimeout(function () {
                            $('.form_alert').fadeOut();
                        }, 1500);
                    } else if (data.register) {
                        $('.form_alert').html(data.register);
                        $('.form_alert').fadeIn();
                        setTimeout(function () {
                            location.replace('/');
                        }, 1500);
                    }
                },
                error: function() {
                    alert('error');
                }
            });
            return false;
        });
    }

    function errorForm () {
        $("#errorform").submit(function (e) {
            e.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "engine/errorform.php",
                cache: false,
                data: form_data,
                success: function () {
                $('.error_form_block').hide();
                $('.form_alert').html('Сообщение успешно отправлено, мы постараемся разобраться в проблеме в ближайшее время!');
                $('.form_alert').fadeIn(500);
                setTimeout(function () {
                    $('.form_alert').fadeOut();
                }, 3000);
            }
            });
        });
    }

    function adminAuth () {
        $(document).on("submit", "#admin", function (e) {
            e.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "engine/admin/auth.php",
                cache: false,
                data: form_data,
                dataType: 'json',
                success: function (data) {
                    if (data.auth) {
                        location.reload();
                    } else if (data.error) {
                        alert(data.error);
                    }
                },
                error: function() {
                    alert('bad');
                }
            });
        }); 
    }

    function updateImage () {
        $('.upload_button').click(function() {
			$('#uploadImage').ajaxSubmit({
				type: 'POST',
				url: 'engine/updateimg.php',
				target: '.form_alert',
				success: function() {
					$('#uploadImage')[0].reset();
					$('.form_alert').fadeIn();
					setTimeout(function () {
						$('.form_alert').fadeOut();
					}, 1500);
				}
			});
		});
    }

    function previewFile () {
        const preview = document.querySelector('.preview_img');
        const file = document.querySelector('.add_file').files[0];
        const reader = new FileReader();

        reader.addEventListener("load", function () {
            // convert image file to base64 string
            preview.src = reader.result;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    function updateNotifications () {
        $('#updateNotifications').click(function() {
			$.ajax({
				type: 'POST',
				url: 'engine/updatenotifications.php',
                cache: false,
				success: function() {
                    $('.notification_count').addClass('null');
                    $('.notification_count').text('');
				}
			});
		});
    }

    function autoUpdateNotifications () {
        for (var i = 0; i < 2; i++) {
            $.ajax({
                url: 'engine/autoUpdate/messageIndicator.php',
                success: function(data) {
                    $('.profileblock_messages').html(data);
                }
            });

            $.ajax({
                url: 'engine/autoUpdate/messageList.php',
                success: function(data) {
                    $('.ajax-chatlist').html(data);
                }
            });
        }
    }

    if (screen.width >= 992) {
        setInterval(autoUpdateNotifications, 5000);
    }

</script>