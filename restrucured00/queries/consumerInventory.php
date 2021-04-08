<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/css/homePage/consumerInventory.css";

<div class="invetory">
<?php
include('dbh.inc.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = "SELECT b.`brand-name`, b.`produce-type`, i.quantity, i.`point-cost` FROM `brandType` AS b INNER JOIN inventory AS i ON i.`brand-id` = b.`brand-id`;";


if($result = mysqli_query($connection, $query))
{
    if(mysqli_num_rows($result) > 0)
    {
	echo "<table border='1';'>";
	echo"<tr>";
	echo "<th>Brand name</th>";
	echo "<th>Product</th>";
	echo "<th>Quantity</th>";
	echo "<th>PointCost</th>";
	echo"</tr>";



	while($row = mysqli_fetch_assoc($result))
	{
	    echo "<tr>";
	    foreach($row as $key => $field)
	    {
		echo '<td>' . $field . '</td>';
	    }
	    echo "</tr>";
	}

	echo "</tables>";

	mysqli_free_result($result);

    }
    else {
	echo "No records matching your query were found.";
    }
}
else {
    echo "Error: could not be able to execute $query. " . mysqli_error($connection);
}

mysqli_close($connection);
?>

</div>
