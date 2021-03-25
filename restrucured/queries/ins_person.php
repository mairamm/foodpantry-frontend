<?php
//include handles connection to the database
include 'dbh.inc.php';

//displays all errros and warnings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$QRcode = mysqli_real_escape_string($conn, $_POST['QRcode']);
$fname = mysqli_real_escape_string($conn, $_POST['Firstname']);
$lname = mysqli_real_escape_string($conn, $_POST['Lastname']);
$email = mysqli_real_escape_string($conn, $_POST['Email']);
$passwd = mysqli_real_escape_string($conn, $_POST['Password']);

//this will allow the employee to add new people into the database
$sql = "INSERT INTO individual (QRcode, Firstname, Lastname, Email, Password) VALUES('" . $QRcode . "','" . $fname ."','" . $lname . "','" . $email . "','" $passwd . "')";

if(mysqli_query($conn, $sql)){
    echo "User added successfully!";
} else{
echo "ERROR: Could not add $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
