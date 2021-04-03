<?php
include ('dbh.inc.php');

//commented out temporarily due to pathing issue
require_once ('./assets/includes/update_item.inc.php')

//displays all errors or warnings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 $prodid = mysqli_real_escape_string($connection, $_POST['prod-id']);
 $brandid = mysqli_real_escape_string($connection, $_POST['brand-id']);
 $quantity = mysqli_real_escape_string($connection, $_POST['quantity']);
 $pointcost = mysqli_real_escape_string($connection, $_POST['point-cost']);
 $expirationdate = mysqli_real_escape_string($connection, $_POST['expiration-date']);
 $brandname = mysqli_real_escape_string($connection, $_POST['brand-name']);
 $producetype = mysqli_real_escape_string($connection, $_POST['produce-type']);
 
 if(mysqli_query($connection, "CALL Inventory(". $prodid . "," . $brandid . ",'" . $quantity . "'," . $pointcost . "," . $brandname . "," . $producetype . ");")){
 echo "Inventory updated.";
} else{
    echo "ERROR: Could not update $sql. " . mysqli_error($connection);
}

mysqli_close($connection);
?>
