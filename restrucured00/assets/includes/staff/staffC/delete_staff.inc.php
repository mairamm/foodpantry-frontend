<?php

//will display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["Submit"])) {
    $QRcode = $_POST["QRcode"];

include ('../../dbh.inc.php');
include ('../staffFunctions.inc.php');


if (emptyQRcode($QRcode) == true) {
    header("location: ../../../../staff/staffC/delete_staff.php?error=EmptyQRcode");
    echo "please enter a QRcode";
    exit();
}

deleteStaff($connection, $QRcode);

}
