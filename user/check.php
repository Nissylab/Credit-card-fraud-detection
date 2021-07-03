

<?php
include '../dbcon/db.php';
session_start();


$uid=$_SESSION['userid'];
 $cid=$_SESSION['custid'];
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
					<a  class="current-demo" href="index.php">New Transaction</a>
					<a href="acc.php">Account Info</a>
                                            <a  href="trans.php">Transaction Info</a>
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
        $length = 8;
                   $transactionnum = substr(str_shuffle("0123456789"), 0, $length);
                   
         $sql="SELECT `Flag` FROM `Trans_table` WHERE `OTP`='$otp'";
     $result=$con->query($sql);
            
            while ($row = mysqli_fetch_array($result))
            {
            $flg=$row['Flag'];
            }
            
            if($flg==1)
            {
              //  echo 'Transaction Success';
                echo "  <img style='width:300px' src='./images/success_payment.png' />";
                echo '<br>';
                 echo '<br>';
                
          
                   echo 'Payee Name :'. $_SESSION['payeename'];
                       echo '<br>';
    echo 'Payee Account Number :'.$_SESSION['accnum'];
        echo '<br>';
    echo 'Amount :'.$_SESSION['amt'];
    $amt=$_SESSION['amt'];
        echo '<br>';
     echo 'Transaction Number:'.$transactionnum;
     
           $sql="UPDATE `user` SET  `AccountBalance`=`AccountBalance`-$amt WHERE `id`=$uid";
    $con->query($sql);
    
       $sqlins="INSERT INTO `Transactions`( `U_Id`,`Transaction_Num`, amount,`Status`, `Date`) VALUES($uid,'$transactionnum',$amt,'Success',now()) ";
                $con->query($sqlins);
                
            }
            else
            {
                  $amot=$_SESSION['amt'];
                     $sqlins="INSERT INTO `Transactions`( `U_Id`,`Transaction_Num`, amount,`Status`, `Date`)  VALUES($uid,'$transactionnum',$amot,'Failed',now()) ";
                $con->query($sqlins);
                
                $sql="INSERT INTO `FailureAttempts`( `CustId`,`date`) VALUES ($cid,now())";
                $con->query($sql);
                         echo "  <img style='width:300px' src='./images/failed.png' />";
                
                
            }
            echo '<br>';
              echo '<br>';
            
            echo "    <a href='./index.php'>Click Here to do another Transaction</a>";
            
          
        
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

