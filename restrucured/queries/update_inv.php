<?php
include 'dbh.inc.php';
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
 
 if(mysqli_query($conn, "CALL upInventory(". $prodid . "," . $brandid . ",'" . $quantity . "'," . $pointcost . "," . $brandname . "," . $producetype . ");")){
	 
	 
	echo "Inventory updated.";
} else{
    echo "ERROR: Could not update $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
