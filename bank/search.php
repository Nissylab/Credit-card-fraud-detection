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
					<a class="current-demo" href="search.php">Search</a>
                    <a  href="blacklist.php">Add Balcklisted IP</a>

                                        	<a  href="logout.php">Log Out</a>
					
				</nav>

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
                       
                                
                        
                            <div class="form-1">


                                  
                                   
                                                	<input type="text" name="accno" placeholder="Account Number" />
                                                       
                           
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
    $accno=$_POST['accno'];
    $sql="SELECT `CustomerName`,`CustomerId`,`AccNumber`,`Phone`,`IMEI`,`AccountBalance`,`Email` FROM `user` WHERE `AccNumber`=$accno";
       
    $result=$con->query($sql);
    if ($result->num_rows > 0) {
        
            while ($row = mysqli_fetch_array($result))
            {
      
            $name =$row['CustomerName'];
      $Custid =$row['CustomerId'];
            $accnumber =$row['AccNumber'];
            $phne =$row['Phone'];
            $imei =$row['IMEI'];
            $AccountBalance =$row['AccountBalance'];
            $mail =$row['Email'];
            
      
        
            
       
            }
            echo " 
                <form method='POST'>
              <div class='form-1'>


                                  
                                   Account Number
                                                	<input type='text' name='upaccno' value=$accnumber readonly/>
                                                                  Customer Name
                                                	<input type='text' name='upname' value=$name />
                                                                 Customer ID
                                                	<input type='text' name='upcustid' value=$Custid />
                                                                 Mobile Number
                                                	<input type='text' name='upphone' value=$phne />
                                                                 IMEI Number
                                                	<input type='text' name='upimei' value=$imei />
                                                                            Account Balance
                                                	<input type='text' name='upaccbal' value=$AccountBalance />
                                                                           Email Id
                                                	<input type='text' name='upemail' value=$mail />
                                                       
                           
                                                                        <br>
                                                                        <center >
                                                                            <div >
                                                                                <input style='background: #00aabb' type='submit' value='UPDATE' name='upsub'/>
                                                                            </div>   
                                                                        </center>
                                                                       
                                                                               
                                        	
				</div>
                                   
            
        </form> ";
    
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