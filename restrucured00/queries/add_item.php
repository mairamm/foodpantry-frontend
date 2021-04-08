<?php
//include handles connection to database
include ('dbh.inc.php');
//displays errors and warnings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$db = mysqli_connect("localhost","alopez","qWECGWGYh?fPByLxe@a", "foodpantry");

$statement1 = mysqli_prepare($db, "INSERT INTO inventory (`prod-id`,quantity,`point-cost`, `expiration-date`) VALUES(?,?,?,?);");
$statement2 = mysqli_prepare($db, "INSERT INTO `brandType` (`brand-id`,`brand-name`,`produce-type`) VALUES(?,?,?);");

if(!$statement1) {
    echo "Prepare failed: (". $db->errno.") ".$db->error. "<br>";
    }

if(!$statement2) {
    echo "Prepare failed: (". $db->errno.") ".$db->error. "<br>";
    }

$statement1->bind_param('ssss', $prodid, $quantity, $pointcost, $expirationdate);
$statement2->bind_param('sss', $brandid, $brandname, $producetype);

if($statement1->execute() && $statement2->execute()) {
    echo "Added!";
    }
    else {
        echo "Error" . mysqli_error($db);
        die();
    }

mysqli_close($connection);
?>
