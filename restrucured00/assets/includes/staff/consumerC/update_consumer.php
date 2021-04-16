<?php

//will display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["Submit"])) {
    $prodid = $_POST["QRcode"];
    $pointbalance = $_POST["point-balance"];
    $visitnum = $_POST["visit-num"];

include ('../../dbh.inc.php');
include ('../staffFunctions.inc.php');


if (updateConsumerEmpty($QRcode, $pointbalance,$visitnum ) == true) {
    header("location: ../../../../staff/consumerC/update_consumer.php?error=EmptyQRcode");
    echo "please enter all fields";
    exit();
}

updateConsumer($connection, $QRcode, $pointbalance, $visitnum);

}
