<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>DeFiPay - Digital Payment Network for the Decentralized Future</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
  </head>

  <body>

    
    
    <script type="text/javascript">
    	$("#mail").submit(function (e) {
             e.preventDefault();
              var form_data = $(this).serialize();
              $.ajax({
                  type: "POST",
                  url: "mail.php",
                  cache: false,
                  data: form_data,
                  success: function () {
              		$('.modal_content').html('<div class="modal_sended">We will contact you<br>as soon as possible!</div>');
              	}
              });
		});

		$("#subscribe").submit(function (e) {
             e.preventDefault();
              var form_data2 = $(this).serialize();
              $.ajax({
                  type: "POST",
                  url: "subscribe.php",
                  cache: false,
                  data: form_data2,
                  success: function () {
              		alert('ok');
              	}
              });
		});
    </script>

    <script type="text/javascript" src="js/script.js"></script>
  </body>

</html>