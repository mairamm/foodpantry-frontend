<?php
//include handles connection to the database
include './assets/includes/dbh.inc.php';

//will display all errors and warnings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$QRcode = mysqli_real_escape_string($conn, $_POST['QRcode']);
$fname = mysqli_real_escape_string($conn, $_POST['Firstname']);
$lname = mysqli_real_escape_string($conn, $_POST['Lastname']);
$email = mysqli_real_escape_string($conn, $_POST['Email']);
$passwd = mysqli_real_escape_string($conn, $_POST['Password']);

//this should allow values from the inventory to be updated
if(mysqli_query($conn, "CALL upInventory(". $QRcode . "," . $fname . ",'" . $lname . "'," . $email . "," . $email . ",". ");")){
	 
	 
	echo "Info updated.";
} else{
    echo "ERROR: Could not update $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
