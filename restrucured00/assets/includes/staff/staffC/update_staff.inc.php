<?php
//include handles connection to the database
include '../../dbh.inc.php';

//will display all errors and warnings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$QRcode = mysqli_real_escape_string($connection, $_POST['QRcode']);
$fname = mysqli_real_escape_string($connection, $_POST['Firstname']);
$lname = mysqli_real_escape_string($connection, $_POST['Lastname']);
$email = mysqli_real_escape_string($connection, $_POST['Email']);
$passwd = mysqli_real_escape_string($connection, $_POST['Password']);

//this should allow values from the inventory to be updated
if(mysqli_query($connection, "CALL upInventory(". $QRcode . "," . $fname . ",'" . $lname . "'," . $email . "," . $email . ",". ");")){


	echo "Info updated.";
} else{
    echo "ERROR: Could not update $sql. " . mysqli_error($connection);
}

mysqli_close($connection);
?>
