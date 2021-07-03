<?php
session_start();

$chek=$_SESSION['admin'];

if($chek==NULL)
{
    
       echo "<script type='text/javascript'> window.location='../index.php';</script>";  
}

include '../dbcon/db.php';
if(isset($_POST['sub']))
{
   
     
    
    $cardno=$_POST['cardno'];
    $expiry_mm=$_POST['expiry_mm'];

    $expiry_yy=$_POST['expiry_yy'];

    $cardcvv=$_POST['cvv'];

    $cardtype=$_POST['cardtype'];


 $custid=$_POST['custid'];
  $accno=$_POST['accno'];
    
 $accbal=$_POST['accbal'];
  $phone=$_POST['phone'];
    
 $email=$_POST['email'];
  $imei=$_POST['imei'];
    $pass=$_POST['pass'];

    $custname=$_POST['custname'];
 
 
 $sql="INSERT INTO `user`(`CustomerName`, `CustomerId`, `AccNumber`, 
 `Phone`, `IMEI`, `AccountBalance`,
  `Email`, `password`,  `card_number`, `cvv`,
   `expiry_mm`, `expiry_yy`, `card_type`) 
   VALUES('$custname',$custid,$accno,'$phone',
   '$imei',$accbal,'$email','$pass','$cardno','$cardcvv','$expiry_mm',
   '$expiry_yy','$cardtype') ";
  
    if($con->query($sql)===TRUE)
   {
       echo "<script type='text/javascript'>alert('Successfully added')</script>";
   }
 else {
       echo $con->error;    
   }
    
    
    
}

?>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>LOGIN </title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>      <form method="POST" action="">
        <div class="container">
		

			
			<header>
			
			<h1>XYZ <strong>BANK</strong> </h1>
				<h2>Bank Administrator</h2>
				
				<nav class="codrops-demos">
					<a class="current-demo" href="index.php">Add new Account</a>
					<a href="search.php">Search</a>
                    <a  href="blacklist.php">Add Balcklisted IP</a>

					     	<a  href="logout.php">Log Out</a>
				</nav>

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
                       
                                
                        
                            <div class="form-1">
                           
<!--                                <input type="text" name="log" placeholder="Username or email"/>
                                       <input type="password" name="pas" placeholder="Password"/>-->
                                    	<input type="text" name="custname" placeholder="Customeer Name"required />
                                        <input type="text" name="custid" placeholder="Customer Id" required/>
                                                	<input type="text" name="accno" placeholder="Account Number" required/>
                                                        	<input type="text" name="accbal" placeholder="Balance" required/>
                                                                	<input type="text" pattern="[9876]{1}[0-9]{9}" name="phone" placeholder="Phone" required/>
                                                                        <input type="text" name="email" placeholder="Email" required/>
                                                                        <input type="text" name="imei" placeholder="IMEI NO" required/>
                                                                        <br>

                                                                        <input type="password" name="pass" placeholder="Password" required />
                           <br>
                                                                        <input type="text" name="cardno" placeholder="CARD NO" required/>
                                                                        <input type="text" name="expiry_mm" placeholder="EXPIRY MM" required/>
                                                                        <input type="text" name="expiry_yy" placeholder="EXPIRY DD"required />
                                                                        <input type="text" name="cvv" placeholder="cvv" />
<table>
<tr>
    <td> Card Type </td>
    <td> <select class="form-control" name="cardtype" id="">

<option value="Basic">BASIC</option>
<option value="Silver">Silver</option>
<option value="Gold">Gold</option>
</select></td>
</tr>
</table>


                                                                        <br>
                                                                        <center >
                                                                            <div >
                                                                                <input style="background: #00aabb" type="submit" value="SUBMIT" name="sub"/>
                                                                            </div>   
                                                                        </center>
                                                                       
                                                                               
                                        	
				</div>
                                   
			</section>
        </div>
        </form>   </body>
</html>