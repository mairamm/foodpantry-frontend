<?php

//checks for any errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["Submit"])) {
    $QRcode = $_POST["QRcode"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $passwd = $_POST["passwd"];
    $pointbalance = $_POST["is-admin"];


include('../../dbh.inc.php');
include('../staffFunctions.inc.php');

if (addStaffEmpty($QRcode, $fname, $lname, $email, $passwd, $pointbalance, $consumertype, $avgweekpoints, $visitnum) {
    header("location: ../../../../staff/staffC/add_staff.php?error=EmptyFields");
    exit();
}

addStaff($connection, $QRcode, $fname, $lname, $email, $passwd, $isadmin)
}
