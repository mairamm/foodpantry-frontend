<?php

//the following 3 lines of code reports warnings and errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["Submit"])) {
    $prodid = $_POST["prod-id"];

//this include handles the connection to the database
include ('deletefunc.inc.php');
include ('dbh.inc.php');

if(emptyField($prodid) == true) {
    header("location: ../../../../staff/delete_item.php?error=EmptyID");
    echo "Empty field";
    exit();
}

deleteItem($connection, $prodid);
}
