<?php
function qrCodeIDIsUnique($qrcodeid) {
	include('dbh.inc.php');
	$isUnique = 1;

	$sql = "SELECT QRcode FROM individual";
	$result = mysqli_query($connection, $sql);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			//echo "qrid: " . $row["QRcode"];
			if ($qrcodeid == $row["QRcode"]) {
				$isUnique = 0;
			}
		}
	} else {
		echo "Nothing found!";
	}

	return $isUnique;
}

function generateRandString() {
	$characters = array("A","B","C","D","E","F","G","H","I","J","K","L","M"
	,"N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f"
	,"g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y"
	,"z","0","1","2","3","4","5","6","7","8","9");
	$length = rand(1,10);
	$stringGenerated = "";

	for ($i = 0; $i < $length; $i++) {
		$characterSelected = rand(0,35);
		$stringGenerated .= $characters[$characterSelected];
	}

	return $stringGenerated;
}

?>
