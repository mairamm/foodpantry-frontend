<?php

//will display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["Submit"])) {
    $consumertype = $_POST["consumer-type"];
    $pointbalance = $_POST["point-balance"];
    $avgweekpoints = $_POST["avg-week-points"];
    $visitnum = $_POST["visit-num"];

include ('../../dbh.inc.php');
include ('../staffFunctions.inc.php');


if (updateConsumerEmpty($consumertype, $pointbalance, $avgweekpoints, $visitnum ) == true) {
    header("location: ../../../../staff/consumerC/update_consumer.php?error=EmptyQRcode");
    echo "please enter all fields";
    exit();
}

updateConsumer($connection, $consumertype, $pointbalance, $avgweekpoints, $visitnum);

}
