<?php
//displays all errors or warnings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["Submit"])) {
    $prodid = $_POST["prod-id"];
    $quantity = $_POST["quantity"];
    $pointcost = $_POST["point-cost"];
    $expirationdate = $_POST["expiration-date"];

    require_once ('../../dbh.inc.php');
    require_once ('../staffFunctions.inc.php');


    updateInventory($connection, $prodid, $quantity, $pointcost, $expirationdate);

}
