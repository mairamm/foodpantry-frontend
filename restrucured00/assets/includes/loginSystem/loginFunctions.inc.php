<?php

function signupEmpty($fname, $lname, $email, $passwd, $passwdRepeat) {
	$result;
	if (empty($fname) || empty($lname) || empty($email) || empty($passwd) || empty($passwdRepeat)) {
		$result == true;
	} else {
		$result == false;
	}
	return $result;
}

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
		header("location: ../../../signup.php?error=statementfailedemailtaken");
		exit();
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


function signupUser($connection, $fname, $lname, $email, $passwd) {
	$sql = "INSERT INTO individual (fname, lname, email, passwd) VALUES(?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($connection);
	if (!mysqli_stmt_init($connection, $sql)) {
		header("location: ../../../signup.php?error=statementfailedsignupuser");
		exit();
	} else {

	$hashedPasswd = password_hash($passwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $hashedPasswd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../../../signup.php?error=success");
	exit();
	}
}


#===================================LOGIN PAGE=======================================

function loginEmpty($email, $passwd) {
	$result;
	if (empty($email) || empty($passwd)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}


function userLogin($connection, $email, $passwd) {
	$sql ="SELECT * FROM individual WHERE email=?;";
	$stmt = mysqli_stmt_init($connection);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../../../login.php?error=sqlerror");
		exit();
	} else {
		mysqli_stmt_bind_param($stmt, "s", $email);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if ($row = mysqli_fetch_assoc($result)) {
			$dbPass = $row['passwd'];
			$passwdHash = password_hash($dbPass, PASSWORD_DEFAULT);
			$passwdCheck = password_verify($passwd, $passwdHash);
			if($passwdCheck == false)  {
				header("location: ../../../login.php?error=passerror");
				exit();
			} elseif($passwdCheck == true) {
				session_start();
				$_SESSION['qrcodesess'] = $row['QRcode'];		// used for outputting consumer's qrcode
				$_SESSION['elogsess'] = $row['email'];
				$_SESSION['fnamesess'] = $row['email'];
				$_SESSION['lnamesess'] = $row['email'];
				header("location: ../../../home.php?error=success");
				exit();
			}
		} else {
			header("location: ../../../login.php?error=nouser");
			exit();
		}
	}
}
