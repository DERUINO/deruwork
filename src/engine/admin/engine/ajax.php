<script type="text/javascript">

    function updateInfo () {
        $(document).on("submit", "#updateInfo", function (e) {
            e.preventDefault();
            $('.accountinfo-row').children('input').prop('disabled', false);
            var username = $('.input_name').val();
            var form_data = $(this).serialize();
            var check = confirm('Подтвердить обновление информации?');
            if (check == true) {
                $.ajax({
                    type: "POST",
                    url: "/engine/admin/engine/update.php",
                    cache: false,
                    data: form_data,
                    success: function () {
                    window.location.replace('/engine/admin/index.php?name='+username+'');
                    },
                    error: function() {
                    }
                });
            } else {
                return false;
            }
        });
    }

</script>