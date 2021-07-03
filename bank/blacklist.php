<?php
include '../dbcon/db.php';
session_start();

$chek=$_SESSION['admin'];

if($chek==NULL)
{
    
       echo "<script type='text/javascript'> window.location='../index.php';</script>";  
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
					<a  href="index.php">Add new Account</a>
					<a href="search.php">Search</a>

                    <a class="current-demo" href="blacklist.php">Add Balcklisted IP</a>

                                        	<a  href="logout.php">Log Out</a>
					
				</nav>

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
                       
                                
                        
                            <div class="form-1">


                                  
                                   
                                                	<input type="text" name="ip" placeholder="Enter Ip . eg: 192.168.1.0 " />
                                                       
                           
                                                                        <br>
                                                                        <center >
                                                                            <div >
                                                                                <input style="background: #00aabb" type="submit" value="SEARCH" name="sub"/>
                                                                            </div>   
                                                                        </center>
                                                                       
                                                                               
                                        	
				</div>
                                   
			</section>
        </div>
        </form>  
    
    <?php
    
if(isset($_POST['sub']))
{
    $ip=$_POST['ip'];
    $sql="INSERT INTO `blacklistedIp`(`ipaddress`)
     VALUES ('$ip')";
       
    $result=$con->query($sql);
    if ($result===TRUE) {
        
        echo "<script type='text/javascript'>alert('Successfully added the IP')</script>";

           
    
    }
 else {
        echo 'Invalid Account Id';    
    }
    
}


if(isset($_POST['upsub']))
{
    
      $upaccno=$_POST['upaccno'];
          $upname=$_POST['upname'];
          $upcustid=$_POST['upcustid'];
          $upmob=$_POST['upphone'];
          $upimei=$_POST['upimei'];
              $upbal=$_POST['upaccbal'];
                  $upemail=$_POST['upemail'];
       
 
       $sql="UPDATE `user` SET `CustomerName`='$upname',`CustomerId`=$upcustid,`Phone`='$upmob',`IMEI`='$upimei',`AccountBalance`=$upbal,`Email`='$upemail' WHERE `AccNumber`=$upaccno";
       if($con->query($sql)==TRUE)
       {
               echo "<script type='text/javascript'>alert('Successfully Updated')</script>";
       }
       
    
    
}




    ?>
    
    
    
    
    
    </body>
</html>