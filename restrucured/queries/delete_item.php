<?php
include ('dbh.inc.php');
//$serverName = "localhost";
//$dbUsername = "foodpantry";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//$prodid = mysqli_real_escape_string($conn, $_POST['prod-id']);
//$brandid = mysqli_real_escape_string($conn, $_POST['brand-id']);

$sql1 = "DELETE FROM inventory WHERE prod-id = 8";
$sql2 = "DELETE FROM `brand-type` WHERE brandID LIKE '%" . $brandid . "%'";

if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2))
    {
            echo "Records deleted successfully.";
    } 
    else
    {
        echo "ERROR: Could not delete $sql1 and $sql2. " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>
