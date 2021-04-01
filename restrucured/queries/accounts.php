<?php
include('dbh.inc.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = "SELECT * FROM inventory";

if($result = mysqli_query($connection, $query))
{
    if(mysqli_num_rows($result) > 0)
    {
	echo "<table border='1';'>";
	echo"<tr>";
	echo "<th>ProductID</th>";
	echo "<th>BrandID</th>";
	echo "<th>Quantity</th>";
	echo "<th>PointCost</th>";
	echo "<th>ExpirationDate</th>";
	echo"</tr>";



	while($row = mysqli_fetch_assoc($result)) 
	{
	    echo "<tr>";
	    foreach($row as $key => $field)
	    {
		echo '<td>' . $field . '</td>';
	    }
	    echo "</tr>";
	}:wq

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
