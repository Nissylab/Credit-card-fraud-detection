
<?php
include '../dbcon/db.php';
session_start();


$uid=$_SESSION['userid'];
if($uid==NULL)
{
      echo "<script type='text/javascript'> window.location='../usr.php';</script>";
}


?>

<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <body> <form method="POST">
        <div class="container">



			<header>


				<h1>XYZ <strong>INTERNET</strong> BANKING</h1>

				<nav class="codrops-demos">
					<a class="current-demo" href="index.php">New Transaction</a>
					<a  href="acc.php">Account Info</a>
                                            <a href="trans.php">Transaction Info</a>
                                             <a  href="logout.php">Log Out</a>
				</nav>

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>

			</header>

			<section class="main">
				<div class="form-2">

        <?php


          $otp= $_SESSION['otp'];
         //  echo 'hi';
          // $_POST['otpenter'];


          $card_number_entered= $_POST['cardnum'];
          $cvv_entered = $_POST['cvv'];



          echo "Recieved Here ";

          echo $card_number_entered ;

      echo "<br>";

          echo   $cvv_entered ;
          echo "<br>";


  $otpenter=$_POST['otpenter']  ;
  //echo $otp;
  if($otp==$otpenter)
  {


$SqlValue="SELECT `id`,`card_number`, `cvv`, `expiry_mm`, `expiry_yy`, `card_type` FROM `user` WHERE `id`=$uid";


$result = $con->query($SqlValue);


if(  $result -> num_rows>0)
{


while ($row = mysqli_fetch_array($result)) {

  $card_number = $row['card_number'];

  $cvv = $row['cvv'];





  if( $card_number == $card_number_entered && $cvv_entered==$cvv)

  {


    $MyTrans=rand(9999,9999999);


    $sqlIns="INSERT INTO `Transactions`( `U_Id`, `Transaction_Num`, `amount`, `Status`) VALUES ($uid,'$MyTrans',7000,'success') ";


    $result = $con->query($sqlIns);


    $Upsql="UPDATE `user` SET `AccountBalance`=`AccountBalance`-7000  WHERE `id`=$uid";
    $result = $con->query($Upsql);


    echo "<script type='text/javascript'> alert('Transaction Succesfully completed ') </script>";
    echo "<script type='text/javascript'> window.location='./index.php';</script>";







  }

  else{

    echo $card_number ;

echo "<br>";

    echo   $cvv ;

    echo "<script type='text/javascript'> alert(' Card Details Verification failed ') </script>";
    echo "<script type='text/javascript'> window.location='./index.php';</script>";



  }




}

}








}
 else {
   echo "<script type='text/javascript'> alert('OTP NOT MATCHED ') </script>";
   echo "<script type='text/javascript'> window.location='./index.php';</script>";
}

        // put your code here
        ?>
				</div>​​
			</section>

        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function(){
			    $(".showpassword").each(function(index,input) {
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

			    $('#showPassword').click(function(){
					if($("#showPassword").is(":checked")) {
						$('.icon-lock').addClass('icon-unlock');
						$('.icon-unlock').removeClass('icon-lock');
					} else {
						$('.icon-unlock').addClass('icon-lock');
						$('.icon-lock').removeClass('icon-unlock');
					}
			    });
			});
		</script>
        </form>  </body>
</html>
