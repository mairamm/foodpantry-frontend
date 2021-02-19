<?php
$db = pg_connect("host=localhost dbname=foodpantry user=foodpantry password=Dadp4Boxrl");

if($db) {
    echo '<script>console.log("Connection Successful")</script>';
}
else {
    echo '<script>console.log("Connection Unsuccessful")</script>';
}

?>
