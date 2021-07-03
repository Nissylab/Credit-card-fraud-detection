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
    <h1 style="background-color:powderblue;">USERLOGIN</h1>
    <form action="" method="get"> <table class="table"><tr><td>customerid</td><td><input name="custid" type="text" class="form-control"></td></tr>
    <table><tr><td>password </td><td><input name="passwd" type="text" class="form-control"></td></tr>
    <tr><td></td><td><button name="subbutton" class=btn btn-"danger">LOGIN</button></td></tr></table></form>
        </div>
    <div class="col -12 col-sm-4"></div>
    </div>
    </div>
</body>
</html>
<?php
if(isset($_GET['subbutton']))
{
    $getCustid=$_GET['custid'];
    $getPasswd=$_GET['passwd'];

  echo  $getCustid;
  echo  $getPasswd;

    
}

?>