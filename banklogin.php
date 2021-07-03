
<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  style="background-color:#00BC1B;">
    <div class="container">
        <div class="row">
        
    <div class="col -12 col-sm-4"></div>
    <div class="col -12 col-sm-4">
    <br>
    <br>
    <br><br>
  <center>  <h1 style="background-color:powderblue;">BANK</h1></center>
    <form action="" method="get"> <table class="table"><tr><td>USERNAME</td><td><input name="name" type="text" class="form-control"></td></tr>
        <tr><td>PASSWORD</td><td><input name="passwd" type="text" class="form-control"></td></tr><TR>
        <tr><td></td><td><button  name="subbutton" >LOGIN</button></td></tr></table></form>
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
    $getPasswd=$_GET['passwd'];
    echo $getName;
    echo "<br>";
    echo $getPasswd;
}


?>