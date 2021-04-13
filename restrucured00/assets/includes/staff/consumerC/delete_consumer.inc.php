<?php

//will display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["Submit"])) {
    $prodid = $_POST["QRcode"];

include ('../../dbh.inc.php');
include ('../staffFunctions.inc.php');


if (emptyQRcode($QRcode) == true) {
    header("location: ../../../../staff/consumerC/delete_consumer.php?error=EmptyQRcode");
    echo "please enter a QRcode";
    exit();
}

deleteIndividual($connection, $QRcode);

}
