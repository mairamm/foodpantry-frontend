<?php
//include will handle the connection to the database
include '../../dbh.inc.php';

//will display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$QRcode = mysqli_real_escape_string($connection, $_POST['QRcode']);

//will delete the person from the database by their QRcode
$sql1 = "DELETE FROM individual WHERE QRcode LIKE '%" . $QRcode . "%'";
$sql2 = "DELETE FROM consumer WHERE QRcode LIKE '%" . $QRcode . "%'";

if(mysqli_query($connection, $sql1) && mysqli_query($connection, $sql2))
    {
            echo "Records deleted successfully.";
    }
    else
    {
        echo "ERROR: Could not delete $sql. " . mysqli_error($connection);
    }

    mysqli_close($connection);
    ?>
