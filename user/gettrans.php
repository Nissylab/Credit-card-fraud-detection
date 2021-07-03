<?php
include './db.php';




$r=array();

// Create connection
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT `T_Id`, `U_Id`, `Transaction_Num`, `amount`, `Status`, `Date` FROM `Transactions` WHERE 1 ";
$result =  $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
$r[]=$row;

}

echo json_encode(
    $r
);
} else {
  echo "0 results";
}
$con->close();

?>
