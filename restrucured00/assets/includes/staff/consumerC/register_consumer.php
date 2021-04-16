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
    $pointbalance = $_POST["point-balance"];
    $consumertype = $_POST["consumer-type"];
    $avgweekpoints = $_POST["avg-week-points"];
    $visitnum = $_POST["visit-num"];


include('../../dbh.inc.php');
include('../staffFunctions.inc.php');

if (addconsumerEmpty($QRcode, $fname, $lname, $email, $passwd, $pointbalance, $consumertype, $avgweekpoints, $visitnum) {
    header("location: ../../../../staff/consumerC/register_consumer.php?error=EmptyFields");
    exit();
}

addConsumer($connection, $QRcode, $fname, $lname, $email, $passwd, $pointbalance, $consumertype, $avgweekpoints, $visitnum)
}
