<?php
include './assets/includes/dbh.inc.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$prodid mysqli_real_escape_string($conn, $_POST['Prod_ID']);
 $brandid mysqli_real_escape_string($conn, $_POST['Brand_ID']);
 $quantity mysqli_real_escape_string($conn, $_POST['quantity']);
 $pointcost mysqli_real_escape_string($conn, $_POST['Point_cost']);
 $expirationdate mysqli_real_escape_string($conn, $_POST['expiration_date']);
 $brandname mysqli_real_escape_string($conn, $_POST['Brand_Name']);
 $producetype mysqli_real_escape_string($conn, $_POST['Produce_type']);
 
 $sql = "INSERT INTO inventory(prodid, brandid, quantity, pointcost, expirationdate, brandname, producetype) VALUES('" . $prodid . "','" . $brandid . "','" . $quantity . "','" . $pointcost . "','" . $expirationdate . "','" $brandname . "','" $producetype ."',0 )";

 if(mysqli_query($conn, $sql)) {
	 
	echo "Added to Inventory.";
} else{
    echo "ERROR: Could not update $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
