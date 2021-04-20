<?php
# This file purpose is to initiate a connection to the foodpantry db
# This file can be included in any other page to establish a connection

$serverName = "localhost";
$dbUsername = "lsamha";
$dbPasswd = "=TRkkg6ev9XN^eKBYw";
$dbName = "lsamha";

$connection = mysqli_connect($serverName, $dbUsername, $dbPasswd, $dbName);

if (!$connection) {
  die("Connection did not make it (FAILED): " . mysqli_connect_error());
}
