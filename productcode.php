
<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <div class="container">
        <div class="row">
        
    <div class="col -12 col-md-4"></div>
    <div class="col -12 col-md-4">
       <form action="" method="get"> <table class="table">
            <TD>PRODUCTCODE</TD><TD><input name="pcode" type="text" class=form-control></TD></TR>
            <tr><td></td><td><button name="searchbut" class= btn btn-danger>SEARCH</button></td></tr></table></form>
        </div>
    <div class="col -12 col-md-4">
    </div>

</body>
</html>
<?php
if(isset($_GET['searchbut']))
{
    $getPcode=$_GET['pcode'];

    $connection=new mysqli("localhost","root","","ccfdp");
    $sql="SELECT `id`, `productname`, `productcode`, `image`, `description`, `amount`, `quantityavailble` FROM `products` WHERE 'productcode' ='$getPcode'";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
         
            $getPname=$row['productname'];
            $getImg=$row['image'];
            $getDes=$row['description'];
            $getAmt=$row['amount'];
            $getQuanav=$row['quantityavailble'];


           echo  $getPname;
           echo "<br>";
           echo  $getImg;
           echo "<br>";
            echo $getDes;
            echo "<br>";
           echo  $getAmt;
           echo "<br>";
           echo  $getQuanav;

        }
        
    }
    else{
       echo"invalid code"; 
    }

}
?>

