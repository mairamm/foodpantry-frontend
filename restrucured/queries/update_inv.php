<?php
include ('dbh.inc.php');

//commented out temporarily due to pathing issue
//require_once ('./assets/includes/update_item.inc.php')

//displays all errors or warnings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


<<<<<<< HEAD
 $prodid = mysqli_real_escape_string($connection, $_POST[`prod-id`]);
 $brandid = mysqli_real_escape_string($connection, $_POST[`brand-id`]);
 $quantity = mysqli_real_escape_string($connection, $_POST[`quantity`]);
 $pointcost = mysqli_real_escape_string($connection, $_POST[`point-cost`]);
 $expirationdate = mysqli_real_escape_string($connection, $_POST[`expiration-date`]);
 $brandname = mysqli_real_escape_string($connection, $_POST[`brand-name`]);
 $producetype = mysqli_real_escape_string($connection, $_POST[`produce-type`]);
 
 
 
 if(mysqli_query($connection, "CALL upinventory(". $prodid . "," . $brandid . ",'" . $quantity . "'," . $pointcost . "," . $brandname . "," . $producetype . ");")){
 echo "Inventory updated.";
=======
$prodid = mysqli_real_escape_string($connection, $_POST[`prod-id`]);
$brandid = mysqli_real_escape_string($connection, $_POST[`brand-id`]);
$quantity = mysqli_real_escape_string($connection, $_POST[`quantity`]);
$pointcost = mysqli_real_escape_string($connection, $_POST[`point-cost`]);
$expirationdate = mysqli_real_escape_string($connection, $_POST[`expiration-date`]);
$brandname = mysqli_real_escape_string($connection, $_POST[`brand-name`]);
$producetype = mysqli_real_escape_string($connection, $_POST[`produce-type`]);

if(mysqli_query($connection, "CALL upinventory(". $prodid . "," . $brandid . ",'" . $quantity . "'," . $pointcost . "," . $brandname . "," . $producetype . ");")){
  echo "Inventory updated.";
>>>>>>> 5a71859be63fb7325363c8270fe1bbaa770776b2
} else{
  echo "ERROR: Could not update $sql. " . mysqli_error($connection);
}

mysqli_close($connection);
?>

<html>
<body>
<h1>GO BACK TO:</h1>

<ul>
<li>
<a href="../homepage.php"><strong></strong>Home Page</a>
</li>
<li>
<a href="../staff/staffUpdate.php"><strong>Update another</strong></a>
</li>
</ul>
</body>
</html>
