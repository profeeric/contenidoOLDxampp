<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>
	<!-- IMPORT AJAX //#Es mejor con FETCH -->
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<?php
function generateRandomString($length)
{
	$characters = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

$var = generateRandomString(rand(0, 12 - 1)) . '-' . generateRandomString(3);
?>

<body>
	<form id="loginform" method="post">
		<div>
			Username:<br />
			<input type="text" name="username" id="username" value="asd" /><br />
			Password:<br />
			<input type="password" name="password" id="password" value="123" /><br />
			email:<br />
			<input type="email" name="email" id="email" value="juan@gmail.com" /><br />
			<!--  -->
			<input type="hidden" name="codigo" id="codigo" value="signup" />
			CAPTCHA: <?php echo $var; ?><br />
			<input type="text" name="captcha" id="captcha" value="" /><br />
			<input type="hidden" name="captcha_check" id="captcha_check" value="<?php echo $var; ?>" /><br />
			<!--  -->
			<input type="submit" name="loginBtn" id="loginBtn" value="Login" />
		</div>
	</form>

	<!-- <script>
			$.ajax("request_ajax_data.php", {
				success: function (data) {
					alert("AJAX call was successful!");
					alert("Data from the server" + data);
				},
				error: function () {
					alert("There was some error performing the AJAX call!");
				},
			});
		</script> -->

	<script type="text/javascript">
		$(document).ready(function() {
			$("#loginform").submit(function(e) {
				e.preventDefault();
				//
				$.ajax({
					//envio
					type: "POST",
					url: "login.php",
					data: $(this).serialize(),
					// Recepcion
					success: function(response) {
						var jsonData = JSON.parse(response);

						// user is logged in successfully in the back-end
						// let's redirect
						if (jsonData.success == "1") {
							//location.href = "my_profile.php";
							console.log("username=" + jsonData.username);
							console.log(jsonData);
						} else {
							console.log(jsonData);
							document.getElementById(jsonData.codeError).style.backgroundColor = "red";
							alert("Invalid Credentials!");
						}
					},
					error: function() {
						alert("There was some error performing the AJAX call!");
					},
				});
				//
			});
		});
	</script>
</body>

</html>