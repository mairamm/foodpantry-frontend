<?php
include('../../dbh.inc.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = "SELECT i.QRcode, i.fname, i.lname, i.email, c.`point-balance`, c.`consumer-type`, c.`avg-week-points`, c.`visit-num`
          FROM individual AS i
          INNER JOIN `consumer` AS c ON c.QRcode = i.QRcode;";

if($result = mysqli_query($connection, $query))
{
    if(mysqli_num_rows($result) > 0)
    {
	echo "<table border='1';'>";
	echo"<tr>";
	echo "<th>QRcode</th>";
	echo "<th>FirstName</th>";
	echo "<th>LastName</th>";
	echo "<th>Email</th>";
	echo "<th>PointBalance</th>";
	echo "<th>ConsumerType</th>";
	echo "<th>AvgWeekPoints</th>";
	echo "<th>VisitNumber</th>";
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
