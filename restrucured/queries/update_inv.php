<?php
include ('dbh.inc.php');

//commented out temporarily due to pathing issue
//require_once ('../assets/includes/update_item.inc.php')

//displays all errors or warnings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$db = mysqli_connect("localhost","alopez","qWECGWGYh?fPByLxe@a", "foodpantry");

$statement = mysqli_prepare($db, "UPDATE inventory SET quantity=?, `point-cost`=?, `expiration-date`=? WHERE `prod-id`=?");

if(!$statement){
    echo "Prepare failed: (". $db->errno.") ".$db->error. "<br>";
    }

$statement->bind_param('ssss', $prodid, $quantity,$pointcost, $expirationdate);


if ($statement->execute()) {
    echo "Updated";
    }
    else {
        echo "Error getting result " . mysqli_error($db);
        die();
    }

mysqli_close($connection);

?>
