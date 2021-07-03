<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#00BC1B;">

    <div class="container">
        <div class="row">
        
    <div class="col -12 col-sm-4"></div>
    <div class="col -12 col-sm-4">
    <h1 style="background-color:powderblue;">CUSTOMER ENTRY</h1>
    <form action="" method="get"> <table class="table"><tr><td>custmername</td><td><input name="name" type="text" class="form-control"></td></tr>
        <tr><td>Accountno</td><td><input name="accno" type="text" class="form-control"></td></tr><TR>
            <TD>address</TD><TD><input name="add" type="text" class="form-control"></TD></TR>

            <TD>credit cardnumber</TD><TD><input name="ccno" type="text" class="form-control"></TD></TR>
            <tr><td>CVV</td><td><input class="form-control" name="cvvno" type="text" class="form-control"></td></tr>
            
            <tr><td>ExpiaryDate</td><td><input name="expdate" type="text" class="form-control"></td></tr>
            
            <tr><td>Balance</td><td><input name="bal" type="text" class="form-control"></td></tr>
            
            <tr><td>mobileno</td><td><input name="mobno" type="text"  class="form-control"></td></tr>
            
            <tr><td>Creditcardtype</td><td><input name="cctype" type="text"  class="form-control"></td></tr>
            
            <tr><td>customerid</td><td><input name="custid" type="text" class="form-control"></td></tr>
            
            <tr><td>password</td><td><input name="pass" type="text" class="form-control"></td></tr>
            <tr><td></td><td><button class=btn btn-"danger" name="subbutton">SUBMIT</button></td></tr></table></form>
        </div>
    <div class="col -12 col-sm-4"></div>
    </div>
    </div>
</body>
</html>
<?php
if(isset($_GET['subbutton']))
{
    $getName=$_GET['name'];
    $getAccno=$_GET['accno'];
    $getAdd=$_GET['add'];
    $getCcno=$_GET['ccno'];
    $getCvvno=$_GET['cvvno'];
    $getExpdate=$_GET['expdate'];
    $getBal=$_GET['bal'];
    $getMobno=$_GET['mobno'];
    $getCctype=$_GET['cctype'];
    $getCustid=$_GET['custid'];
    $getPass=$_GET['pass'];

   echo  $getName;
   echo  $getAccno;
   echo $getAdd;
   echo $getCvvno;
   echo $getExpdate;
   echo $getBal;
   echo $getMobno;
   echo $getCctype;
   echo $getCustid;
    echo $getPass;

 $connection=new mysqli("localhost","root","","ccfdp");
  $sql="INSERT INTO `customerentry`(`customername`, `accno`, `address`, `creditcardno`, `CVV`, `expiartdate`, `balance`, `mobile`, 
  `cardtype`, `customerid`, `password`) VALUES ('$getName','$getAccno','$getAdd','$getCcno','$getCvvn','$getExpdate','$getBal','$getMobno',
  '$getCctype','$getCustid','$getPass')";

  $result=$connection->query($sql);

  if($result===TRUE){
      echo "success";
  }
  else{
      echo $connection->error;
  }
}


echo"text"

?>