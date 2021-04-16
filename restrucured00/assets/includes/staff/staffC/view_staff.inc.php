<?php
include('../../dbh.inc.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = "SELECT i.QRcode, i.fname, i.lname, i.email, s.`is-admin`, t.`datetime-in`, t.`datetime-out`
          FROM individual AS i
          INNER JOIN `staff` AS s ON s.QRcode = i.QRcode
          INNER JOIN `timecard` AS t ON t.QRcode = s.QRcode
          WHERE s.`is-admin` = 1;";

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
	echo "<th>IsAdmin</th>";
	echo "<th>ClockedIn</th>";
	echo "<th>ClockedOut</th>";
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
