<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:yellow;">

    <div class="container">
        <div class="row">
        
    <div class="col -12 col-sm-4"></div>
    <div class="col -12 col-sm-4">
    <h1 style="background-color:powderblue;">IPADDRESS</h1>
    <form action="" method="get"> <table class="table"><tr><td>ipaddress</td><td><input name="ip" type="text" class="form-control"></td></tr>
    <tr><td></td><td><button name="subbutton" class=btn btn-"sucess">SUBMIT</button></td></tr></table></form>
        </div>
    <div class="col -12 col-sm-4"></div>
    </div>
    </div>
</body>
</html>
<?php
if(isset($_GET['subbutton']))
{
    $getIp=$_GET['ip'];

    echo $getIp;
    $connection=new mysqli("localhost","root","","ccfdp");
    $sql="INSERT INTO `blacklistedip`(`ipadress`) VALUES ('$getIp')";
    $result=$connection->query($sql);

}

?>