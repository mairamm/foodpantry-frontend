<?php

//will display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["Submit"])) {
    $consumertype = $_POST["consumer-type"];

include ('../../dbh.inc.php');
include ('../staffFunctions.inc.php');


if (emptyType($consumertype) == true) {
    header("location: ../../../../staff/consumerC/delete_consumer.php?error=EmptyConsumertype");
    echo "please enter consumer type";
    exit();
}

deleteIndividual($connection, $consumertype);

}
