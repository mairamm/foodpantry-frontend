<?php

//this include handles the connection to the database
include ('../assets/includes/delete_item.inc.php');
include ('dbh.inc.php');

//the following 3 lines of code reports warnings and errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//$prodid = mysqli_real_escape_string($connection, $_POST[`prod-id`]);
//$brandid = mysqli_real_escape_string($conn, $_POST['brand-id']);

//$sql1 = "DELETE FROM inventory WHERE `prod-id` = '%" .$prodid . "'";

//$sql2 = "DELETE FROM `brand-type` WHERE brand-id LIKE '%" . $brandid . "%'";

if(prodidEmpty($prodid) == true) {
    echo "Empty field";
    
    exit();
}

if(mysqli_query($connection, $sql1))
    {
            echo "Records deleted successfully.";
    } 
    else
    {
        echo "ERROR: Could not delete $sql1. " . mysqli_error($connection);
    }
    
    mysqli_close($connection);
    ?>
