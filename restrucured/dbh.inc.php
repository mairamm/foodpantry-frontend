<?php
# This file's purpose is to initiate a connection to the foodpantry db
# This file can be included in any other page to establish a connection

 $serverName = "localhost";
 $dbUsername = "foodpantry";
 $dbPasswd = "Dadp4Boxrl";
 $dbName = "foodpantry";

 $conn = new mysqli($serverName, $dbUsername, $dbPasswd, $dbName);

 if (!$conn) {
   die("Connecation did not make it (FAILED): " . mysqli_connect_error());
 }
?>
