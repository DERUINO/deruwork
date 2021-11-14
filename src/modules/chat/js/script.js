$(document).ready(function () {
    sliceText();
    search();
    miscButtons();
    sendForms();
    MessageScroll();
    comeToBottom();

    function comeToBottom () {
        var block = document.getElementById("scroll");
        block.scrollTop = block.scrollHeight;
    }

    function MessageScroll() {
        var block = document.getElementById("scroll");
        if (block.scrollTop == (block.scrollHeight-500)) {
            updateChatWindowBottom();
        }
    }

    setInterval(MessageScroll, 1000);

    function sliceText () {
        $('.slice').each(function() {
            if ($(this).text().length > 85) {
                $(this).html($(this).text().slice(0, 85) + '...');
            }
        });
    }

    function search () {
        $(".search").keyup(function() {
            _this = this;
            
        $.each($(".chatblock"), function() {
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1) {
                $(this).hide();
            } else {
                $(this).show(); 
                }               
            });
        });
    }

    function updateChatWindow() {
        for (var i = 0; i < 2; i++) {
            $.ajax({
                url: 'engine/autoUpdate/messageWindow.php',
                success: function(data) {
                    $('.ajax_messagecontainer').html(data);
                }
            });
        }
    };

    function updateChatWindowBottom() {
        for (var i = 0; i < 2; i++) {
            $.ajax({
                url: 'engine/autoUpdate/messageWindow.php',
                success: function(data) {
                    $('.ajax_messagecontainer').html(data);
                    comeToBottom();
                }
            });
        }
    };   

    function miscButtons () {
        $('.add-dialogblock').click(function () {
            $('.chataddcontainer').show();
        });
    }

    function sendForms () {
        $(document).on("submit", "#text", function (e) {
            e.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "",
                cache: false,
                data: form_data,
                success: function () {
                    $('.textarea_text').val('');
                    updateChatWindowBottom();
                },
                error: function() {
                    alert('error');
                }
            });
        });
    
        $(document).on("submit", "#add-dialog", function (e) {
            e.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "",
                cache: false,
                data: form_data,
                success: function () {
                    location.reload();
                },
                error: function() {
                    alert('error');
                }
            });
        });
    }

})