<?php

function badSyntaxFname($fname) {
	$result;
	if (!preg_match("/^[a-zA-Z]*$/", $fname)) {
	$result = true;
	} else {
	$result = false;
	}
	return $result;
}

function badSyntaxLname($lname) {
	$result;
	if (!preg_match("/^[a-zA-Z]*$/", $lname)) {
	$result = true;
	} else {
	$result = false;
	}
	return $result;
}

function invalidEmail($email) {
	$result;
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = false;
	} else {
		$result = true;
	}
	return $result;
}

function passwdMatching($passwd, $passwdRepeat) {
	$result;
	if ($passwd !== $passwdRepeat) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function emailTaken($connection, $email) {
	$result;
	$sql = "SELECT * FROM individual WHERE `email` = ?;";
	$stmt = mysqli_stmt_init($connection);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "ERROR: statement failed email taken";
	} else {

	mysqli_stmt_bind_param($stmt, "s", $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	} else {
		$result = false;
		return $result;
		}
	}
	mysqli_stmt_close($stmt);
}


function signupUser($connection, $QRcode, $fname, $lname, $email, $passwd) {
	$sql = "INSERT INTO individual (QRcode, fname, lname, email, passwd) VALUES(?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($connection);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "ERROR: statement failed sign up user";
		exit();
	} else {

	$hashedPasswd = password_hash($passwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, 'sssss', $QRcode, $fname, $lname, $email, $hashedPasswd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	echo "Sign up complete!";
	exit();
	}
}
?>
