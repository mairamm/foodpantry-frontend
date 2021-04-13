<?php

//will display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["Submit"])) {
    $prodid = $_POST["QRcode"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $passwd = $_POST["passwd"];

include ('../../dbh.inc.php');
include ('../staffFunctions.inc.php');


if (updateStaffEmpty($QRcode, $fname, $lname,$email, $passwd) == true) {
    header("location: ../../../../staff/staffC/update_staff.php?error=EmptyFields");
    echo "please enter all fields";
    exit();
}

updateStaff($connection, $QRcode, $fname, $lname, $email, $passwd);

}
