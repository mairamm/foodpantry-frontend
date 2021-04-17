<?php
//displays all errors or warnings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["Submit"])) {
    $prodid = $_POST["prod-id"];
    $brandid = $_POST["brand-id"];
    $quantity = $_POST["quantity"];
    $pointcost = $_POST["point-cost"];
    $expirationdate = $_POST["expiration-date"];
    $brandname = $_POST["brand-name"];
    $producetype = $_POST["produce-type"];
    $prodpic = $_POST["prod-pic"];

    require_once ('../../dbh.inc.php');
    require_once ('../staffFunctions.inc.php');

    if(updateInvEmpty($prodid, $brandid, $quantity, $pointcost, $expirationdate, $brandname, $producetype, $prodpic) == true) {
    echo "Please enter all fields";
    exit();
    }

    updateInventory($connection, $prodid, $brandid, $quantity, $pointcost, $expirationdate, $brandname, $producetype, $prodpic);

}
