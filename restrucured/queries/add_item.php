<?php
//include handles connection to database
include ('dbh.inc.php');
//displays errors and warnings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 $prodid = mysqli_real_escape_string($connection, $_POST['Prod_ID']);
 $brandid = mysqli_real_escape_string($connection, $_POST['Brand_ID']);
 $quantity = mysqli_real_escape_string($connection, $_POST['quantity']);
 $pointcost = mysqli_real_escape_string($connection, $_POST['Point_cost']);
 $expirationdate = mysqli_real_escape_string($connection, $_POST['expiration_date']);
 $brandname = mysqli_real_escape_string($connection, $_POST['Brand_Name']);
 $producetype = mysqli_real_escape_string($connection, $_POST['Produce_type']);

//will insert data from the user into the inventory 
 $sql = "INSERT INTO inventory(`prod-id`, `brand-id`, quantity, `point-cost`, `expiration-date`, `brand-name`, `produce-type`) VALUES('" . $prodid . "','" . $brandid . "','" . $quantity . "','" . $pointcost . "','" . $expirationdate . "','" $brandname . "','" $producetype ."',0 )";

 if(mysqli_query($connection, $sql)) {
	 
	echo "Added to Inventory.";
} else{
    echo "ERROR: Could not update $sql. " . mysqli_error($connection);
}

mysqli_close($connection);
?>
