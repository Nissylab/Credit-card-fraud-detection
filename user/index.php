<?php
include '../dbcon/db.php';
session_start();

$cid = $_SESSION['custid'];
$uid = $_SESSION['userid'];
if ($uid == NULL) {

	echo "<script type='text/javascript'> window.location='../usr.php';</script>";
}


?>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>XYZ BANK</title>
	<meta name="description" content="Custom Login Form Styling with CSS3" />
	<meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="js/modernizr.custom.63321.js"></script>
	<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
	<style>
		body {
			background: #e1c192 url(images/wood_pattern.jpg);
		}
	</style>
</head>

<body>
	<form method="POST">
		<div class="container">



			<header>

				<h1>XYZ <strong>INTERNET</strong> BANKING</h1>


				<nav class="codrops-demos">
					<a class="current-demo" href="index.php">New Transaction</a>
					<a href="acc.php">Account Info</a>
					<a href="trans.php">Transaction Info</a>
					<a href="logout.php">Log Out</a>
				</nav>

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>

			</header>

			<section class="main">
				<div class="form-2">
					<h1><span class="log-in">New</span> <span class="sign-up">Transaction </span></h1>
					<p class="float">
						<label for="login">Method</label>
						<!--						<input type="text" name="custid" placeholder="Customer Id">-->
						<select name="meth">
							<option value="netbanking">NET BANKING</option>
							<option value="netbanking">DEBIT CARD</option>

						</select>
					</p>
					<p class="float">
						<label for="password">Payee Name</label>
						<input type="text" name="payeename" required />
					</p>
					<p class="float">
						<label for="password">Payee Account Number</label>
						<input type="text" name="payeeaccount" required />
					</p>
					<p class="float">
						<label for="password">Amount</label>
						<input type="text" name="amount" required />
					</p>
					<p class="clearfix">
						<!--						<a href="#" class="log-twitter"></a> -->
						<input disabled class="log-twitter" type="reset" name="but" value="RESET">

						<input disabled type="submit" name="cccc" value="SUBMIT" >
					</p>

					<br>

					<a href="singleItem.php"> Go To shopping Site </a>
				</div>​​
			</section>

		</div>
		<!-- jQuery if needed -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(".showpassword").each(function(index, input) {
					var $input = $(input);
					$("<p class='opt'/>").append(
						$("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
							var change = $(this).is(":checked") ? "text" : "password";
							var rep = $("<input placeholder='Password' type='" + change + "' />")
								.attr("id", $input.attr("id"))
								.attr("name", $input.attr("name"))
								.attr('class', $input.attr('class'))
								.val($input.val())
								.insertBefore($input);
							$input.remove();
							$input = rep;
						})
					).append($("<label for='showPassword'/>").text("Show password")).insertAfter($input.parent());
				});

				$('#showPassword').click(function() {
					if ($("#showPassword").is(":checked")) {
						$('.icon-lock').addClass('icon-unlock');
						$('.icon-unlock').removeClass('icon-lock');
					} else {
						$('.icon-unlock').addClass('icon-lock');
						$('.icon-lock').removeClass('icon-unlock');
					}
				});
			});
		</script>
	</form>
</body>

</html>


<?php

if ((isset($_POST['sub']))) {

	$payeename = $_POST['payeename'];
	$payeeaccount = $_POST['payeeaccount'];
	$amount = $_POST['amount'];
	$_SESSION['payeename'] = $payeename;
	$_SESSION['accnum'] = $payeeaccount;
	$_SESSION['amt'] = $amount;

	echo '<br>';


	$sql = "SELECT count(`id`) FROM `FailureAttempts` WHERE `date`=date(now()) and CustId=$cid";

	$result = $con->query($sql);

	while ($row = mysqli_fetch_array($result)) {
		$count = $row['count(`id`)'];
	}
	if ($count >= 3) {
		echo '3 Failure Attempts Today. Please Try again on Tomorrow';
	} else {

		$chksql = "SELECT `AccountBalance`,Phone FROM `user` WHERE `id`=$uid";
		$result = $con->query($chksql);

		while ($row = mysqli_fetch_array($result)) {
			$bal = $row['AccountBalance'];

			$PhoneNumber = $row['Phone'];
		}

		if ($bal < $amount) {
			echo "<script type='text/javascript'> alert('No Sufficient Balance for Transaction') </script>";
			echo "<script type='text/javascript'> window.location='./index.php';</script>";
		}


		$length = 4;
		$otp = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);


		file_get_contents("http://logixspace.com/smspack/messaging.php?userid=2272576462&password=VGCXOVBVU7&msg=Your%20OTP%20for%20the%20amount%20$amount%20is%20$otp.%20Thank%20you%20&phone=$PhoneNumber");


		$_SESSION['otp'] = $otp;
		echo "<form method='POST' action='newpage.php'/>";

		echo "	<section class='main'>
				<div class='form-2'>
					<h1><span class='log-in'>Enter</span>  <span class='sign-up'>OTP </span></h1>
				
					<p class='float'>
					
                                               <input type='text' name='otpenter' required/>
					</p>
                                     
						<input type='submit' name='subotp' value='SUBMIT'>
					</p>
				</div>​​
			</section>";


		//                 
		//                 echo '<center>';
		//   echo "<input type='text' name='otpenter' value='' />";
		//   echo '<br>';
		//     echo "<input type='submit' value='submitotp' name='subotp'/>";
		//     echo '</form>'; 
		//        echo '</center>';
	}
}





?>