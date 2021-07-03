
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
            <TD>ROLLNO</TD><TD><input name="rollno" type="text" class=form-control></TD></TR>
            <tr><td></td><td><button name="searchbut">SEARCH</button></td></tr></table></form>
        </div>
    <div class="col -12 col-md-4">
    </div>

</body>
</html>
<?php

if(isset($_GET['searchbut']))
{
    $getRollno=$_GET['rollno'];
   
    
    $connection=new mysqli("localhost","root","","min_projectdb");
    $sql="SELECT `id`, `name`, `addmission_no`, `roll_no`, `college` FROM `student` WHERE `roll_no`='$getRollno'";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {

            $getName=$row['name'];
            $getColleage=$row['college'];
            $getAddmission=$row['addmission_no'];

            echo $getName;
            echo "<br>";
            echo $getColleage;
            echo "<br>";
           echo  $getAddmission;
           echo "<br>";

        }
        
    }
    else{
       echo"invalid rollno"; 
    }

}
?>