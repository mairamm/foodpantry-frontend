<?php
//displays errors and warnings
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


include ('../../dbh.inc.php');
include ('../staffFunctions.inc.php');

if(additemEmpty($prodid, $brandid, $quantity, $pointcost, $expirationdate, $brandname, $producetype, $prodpic) == true) {
    header("location: ../../../../staff/add_item.php?error=Emptyfield");
    echo "Please enter all fields";
    exit();
}

addItem($connection, $prodid, $brandid, $quantity, $pointcost, $expirationdate, $brandname, $producetype,$prodpic);

}
