<?php
session_start();

$cid = $_SESSION['custid'];
$uid = $_SESSION['userid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
/* ----- Variables ----- */
$color-primary: #4c4c4c;
$color-secondary: #a6a6a6;
$color-highlight: #ff3f40;

/* ----- Global ----- */
* {
	box-sizing: border-box;
}

html,
body {
	height: 100%;
}

body {
	display: grid;
	grid-template-rows: 1fr;
	font-family: "Raleway", sans-serif;
	background-color: #01e37f;
}

h3 {
	font-size: 0.7em;
	letter-spacing: 1.2px;
	color: $color-secondary;
}

img {
			max-width: 100%;
			filter: drop-shadow(1px 1px 3px $color-secondary);
		}

/* ----- Product Section ----- */
.product {
	display: grid;
	grid-template-columns: 0.9fr 1fr;
	margin: auto;
	padding: 2.5em 0;
	min-width: 600px;
	background-color: white;
	border-radius: 5px;
}

/* ----- Photo Section ----- */
.product__photo {
	position: relative;
}

.photo-container {
	position: absolute;
	left: -2.5em;
	display: grid;
	grid-template-rows: 1fr;
	width: 100%;
	height: 100%;
	border-radius: 6px;
	box-shadow: 4px 4px 25px -2px rgba(0, 0, 0, 0.3);
}

.photo-main {
	border-radius: 6px 6px 0 0;
	background-color: #9be010;
	background: radial-gradient(#e5f89e, #96e001);

	.controls {
		display: flex;
		justify-content: space-between;
		padding: 0.8em;
		color: #fff;

		i {
			cursor: pointer;
		}
	}

	img {
		position: absolute;
		left: -3.5em;
		top: 2em;
		max-width: 110%;
		filter: saturate(150%) contrast(120%) hue-rotate(10deg)
			drop-shadow(1px 20px 10px rgba(0, 0, 0, 0.3));
	}
}

.photo-album {
	padding: 0.7em 1em;
	border-radius: 0 0 6px 6px;
	background-color: #fff;

	ul {
		display: flex;
		justify-content: space-around;
	}

	li {
		float: left;
		width: 55px;
		height: 55px;
		padding: 7px;
		border: 1px solid $color-secondary;
		border-radius: 3px;
	}
}

/* ----- Informations Section ----- */
.product__info {
	padding: 0.8em 0;
}

.title {
	h1 {
		margin-bottom: 0.1em;
		color: $color-primary;
		font-size: 1.5em;
		font-weight: 900;
	}

	span {
		font-size: 0.7em;
		color: $color-secondary;
	}
}

.price {
	margin: 1.5em 0;
	color: $color-highlight;
	font-size: 1.2em;

	span {
		padding-left: 0.15em;
		font-size: 2.9em;
	}
}

.variant {
	overflow: auto;

	h3 {
		margin-bottom: 1.1em;
	}

	li {
		float: left;
		width: 35px;
		height: 35px;
		padding: 3px;
		border: 1px solid transparent;
		border-radius: 3px;
		cursor: pointer;

		&:first-child,
		&:hover {
			border: 1px solid $color-secondary;
		}
	}

	li:not(:first-child) {
		margin-left: 0.1em;
	}
}

.description {
	clear: left;
	margin: 2em 0;

	h3 {
		margin-bottom: 1em;
	}

	ul {
		font-size: 0.8em;
		list-style: disc;
		margin-left: 1em;
	}

	li {
		text-indent: -0.6em;
		margin-bottom: 0.5em;
	}
}

.buy--btn {
	padding: 1.5em 3.1em;
	border: none;
	border-radius: 7px;
	font-size: 0.8em;
	font-weight: 700;
	letter-spacing: 1.3px;
	color: #fff;
	background-color: $color-highlight;
	box-shadow: 2px 2px 25px -7px $color-primary;
	cursor: pointer;

	&:active {
		transform: scale(0.97);
	}
}

/* ----- Footer Section ----- */
footer {
	padding: 1em;
	text-align: center;
	color: #fff;

	a {
		color: $color-primary;

		&:hover {
			color: $color-highlight;
		}
	}
}


</style>


<section class="product">
	<div class="product__photo">
		<div class="photo-container">
			<div class="photo-main">
				<div class="controls">
					<i class="material-icons">share</i>
					<i class="material-icons">favorite_border</i>
				</div>
				<img src="https://lh3.googleusercontent.com/proxy/NPzD09YzkBSg4imDulHFLxoXP4kyurfNKhVmZc2G-_ucgIgqD7Jr8lFw8dl-UswMmp4RGML3vAhkzR0TTuNRutADMx8ImF4BveiUAHf5dIjJDVC96Ee4usGksRSNyEI2OL-qH92sogjAnO8" alt="green apple slice">
			</div>

		</div>
	</div>


	<div class="product__info">
		<div class="title">
			<h1>Adidas shoe</h1>
			<span>PRODUCT CODE: 12334</span>
		</div>
		<div class="price">
			Rs <span>7000</span>
		</div>

		<div class="description">
			<h3>BENEFITS</h3>
			<ul>
				<li>Mesh upper</li>
				<li>EVA midsole and outsole</li>
				<li>3-stripes on the sides
</li>
				<li>Country of Origin: India</li>
			</ul>
		</div>

		<form action="" method="post">
		<button name='buybtn' class="btn btn-success">Buy now </button>
		</form>

		</div>
</section>



</body>
</html>


<?php

include './db.php';
if(isset($_POST['buybtn']))

{
  $json = file_get_contents("http://3.129.113.19/user/csvaccount.php");




	$amount=7000;
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





//////////// IP Checking  //////



function get_client_ip()
 {
      $ipaddress = '';
      if (getenv('HTTP_CLIENT_IP'))
          $ipaddress = getenv('HTTP_CLIENT_IP');
      else if(getenv('HTTP_X_FORWARDED_FOR'))
          $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
      else if(getenv('HTTP_X_FORWARDED'))
          $ipaddress = getenv('HTTP_X_FORWARDED');
      else if(getenv('HTTP_FORWARDED_FOR'))
          $ipaddress = getenv('HTTP_FORWARDED_FOR');
      else if(getenv('HTTP_FORWARDED'))
          $ipaddress = getenv('HTTP_FORWARDED');
      else if(getenv('REMOTE_ADDR'))
          $ipaddress = getenv('REMOTE_ADDR');
      else
          $ipaddress = 'UNKNOWN';

      return $ipaddress;
 }


if (!empty($_SERVER['HTTP_CLIENT_IP']))
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }

echo "<script>  Your Current IP Address is $ip_address </script> ";



$chksql = "SELECT * FROM `blacklistedIp` WHERE `ipaddress`='$ip_address'  ";
  $result = $con->query($chksql);

  if ( $result->num_rows>0 ) {



    $MyTrans=rand(9999,9999999);


    $sqlIns="INSERT INTO `Transactions`( `U_Id`, `Transaction_Num`, `amount`, `Status`) VALUES ($uid,'$MyTrans',7000,'fraud') ";


    $result = $con->query($sqlIns);



    echo "<script type='text/javascript'> alert('Logged In from Blocked IP') </script>";
    echo "<script type='text/javascript'> window.location='./index.php';</script>";
  }





////////////////////////////////




$chksql = "SELECT TIMESTAMPDIFF(SECOND,`Date`,now() ) as timeslotdiff FROM `Transactions` WHERE `U_Id`=$uid and Status='success'  ORDER BY `T_Id` DESC LIMIT 1 ";
  $result = $con->query($chksql);


if(  $result -> num_rows>0)
{


  while ($row = mysqli_fetch_array($result)) {
    $timeslotdiff = $row['timeslotdiff'];

    echo "<script type='text/javascript'> alert('Time in Second Difference from last transaction is $timeslotdiff ') </script>";


    if($timeslotdiff < 120 )

    {



      $chksql = "SELECT avg(`amount`) as avgamt FROM `Transactions` WHERE `U_Id`=$uid  and Status='success' ";
        $result = $con->query($chksql);


      if(  $result -> num_rows>0)
      {


        while ($row = mysqli_fetch_array($result)) {

          $avgamt = $row['avgamt'];

          echo "<script type='text/javascript'> alert('Average amount of account transaction is $avgamt ') </script>";


          $allowedAmount= $avgamt * (0.10) +  $avgamt;


          echo "<script type='text/javascript'> alert('Allowed amount of account transaction is $allowedAmount ') </script>";



if($allowedAmount>=7000)
{






  		$length = 4;
  		$otp = substr(str_shuffle("0123456789"), 0, $length);




  	echo	$_SESSION['otp'] = $otp;
  		echo "<form method='POST' action='newpage.php'/>";

  		echo "	<section class='main'>
  				<div class='form-2'>
  					<h1><span class='log-in'>Enter</span>  <span class='sign-up'>OTP </span></h1>


            <p class='float'>

            <h4>  Enter Card Number  </h4>

                                                 <input type='text' placeholder='Enter Card Number' name='cardnum' required/>
            </p>
<br>

<h4>  Enter CVV </h4>

            <p class='float'>

                                                 <input type='text' placeholder='Enter CVV' name='cvv' required/>
            </p>

            <br>

            <h4>  Enter OTP  </h4>


  					<p class='float'>

                                                 <input placeholder='Enter OTP ' type='text' name='otpenter' required/>
  					</p>

  						<input type='submit' name='subotp' value='SUBMIT'>
  					</p>
  				</div>​​
  			</section>";








}


else{

  $MyTrans=rand(9999,9999999);


  $sqlIns="INSERT INTO `Transactions`( `U_Id`, `Transaction_Num`, `amount`, `Status`) VALUES ($uid,'$MyTrans',7000,'fraud') ";


  $result = $con->query($sqlIns);

  echo "<script type='text/javascript'> alert('Transaction Blocked due to less Average Transaction limit ') </script>";
  echo "<script type='text/javascript'> window.location='./index.php';</script>";


}



        }

      }






    }
    else{



      	$length = 4;
        		$otp = substr(str_shuffle("0123456789"), 0, $length);




        	echo	$_SESSION['otp'] = $otp;
        		echo "<form method='POST' action='newpage.php'/>";

            echo "	<section class='main'>
        				<div class='form-2'>
        					<h1><span class='log-in'>Enter</span>  <span class='sign-up'>OTP </span></h1>


                  <p class='float'>

                  <h4>  Enter Card Number  </h4>

                                                       <input type='text' placeholder='Enter Card Number' name='cardnum' required/>
                  </p>
      <br>

      <h4>  Enter CVV </h4>

                  <p class='float'>

                                                       <input type='text' placeholder='Enter CVV' name='cvv' required/>
                  </p>

                  <br>

                  <h4>  Enter OTP  </h4>


        					<p class='float'>

                                                       <input placeholder='Enter OTP ' type='text' name='otpenter' required/>
        					</p>

        						<input type='submit' name='subotp' value='SUBMIT'>
        					</p>
        				</div>​​
        			</section>";






    }



  }

  }






/////////////////////////////////




}

?>
