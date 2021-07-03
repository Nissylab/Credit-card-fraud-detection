<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body background="C:\Users\Haritha Prasad\Desktop">

    <div class="container">
        <div class="row">
        
    <div class="col -12 col-sm-4"></div>
    <div class="col -12 col-sm-4">
    <h1 style="background-color:powderblue;">ADD PRODUCTS</h1>
    <form action="" method="get"> <table class="table table-borderless"><tr><td>Productname</td><td><input name="pname" type="text" class="form-control"></td></tr>
        <tr><td>ProductCode</td><td><input name="pcode" type="text" class="form-control"></td></tr><TR>
            <TD>Image</TD><TD><input name="img" type="text" class="form-control"></TD></TR>
           
            <tr><td>Description</td><td><input name="des" type="text" class="form-control"></td></tr>
            
            <tr><td>Amount</td><td><input name="amt" type="text" class="form-control"></td></tr>
            
            <tr><td>Quantity available</td><td><input name="quanav" type="text"  class="form-control"></td></tr>
            
            <tr><td></td><td><button name="subbutton" class=btn btn-"danger">SUBMIT</button></td></tr></table></form>
        </div>
    <div class="col -12 col-sm-4"></div>
    </div>
    </div>
</body>
</html>
<?php
if(isset($_GET['subbutton']))
{
    $getPname=$_GET['pname'];
    $getPcode=$_GET['pcode'];
    $getImg=$_GET['img'];
    $getDes=$_GET['des'];
    $getAmt=$_GET['amt'];
    $getQuanav=$_GET['quanav'];
  
   
$connection=new mysqli("localhost","root","","ccfdp");
$sql="INSERT INTO `products`(`productname`,`productcode`, `image`, `description`, `amount`, `quantityavailble`) VALUES ('$getPname','$getPcode','$getImg','$getDes','$getAmt','$getQuanav')";
$result=$connection->query($sql);

if($result===TRUE){
    echo "success";
}
else{
    echo $connection->error;
}
}

?>




