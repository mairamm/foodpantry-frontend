<?php
function qrCodeIDIsUnique($qrcodeid) {
	$isUnique = 0;

	return $isUnique;
}

function generateRandString() {
	$stringCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$chars = str_split($stringCharacters);
	$length = rand(1,10);
	$stringGenerated = "";

	for ($i = 0; $i < $length; $i++) {
		$characterSelected = rand(1,36);
		$stringGenerated += $chars[$characterSelected];
	}

	return $stringGenerated;
}
?>
