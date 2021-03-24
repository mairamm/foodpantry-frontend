<?php

# This page purpose is to check for conditions and set the rules for the signup
# This page can be included in the signup.php page.
# This page also include db connctions include page & functions include page

# Checking if a submit post request is initiated
if (isset($_POST["signupUserSubmit"])) {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $passwd = $_POST["passwd"];
  $passwdRepeat = $_POST["passwdRepeat"];

  # Including a connection to the databases
  # Including the functions page to the databases
  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  # ERROR HANDLERS
  #If the form is empty
  if (signupEmpty($fname, $lname, $email, $passwd, $passwdRepeat) == true ) {
    header("location: ../../signup.php?error=emptyform");
    exit();
  }

  #If the fname sysntax is wrong. Sanitize using regular experssions
  if (badSyntaxFname($fname) == true ) {
    header("location: ../../signup.php?error=badsyntaxfname");
    exit();
  }

  #If the fname sysntax is wrong. Sanitize using regular experssions
  if (badSyntaxLname($lname) == true ) {
    header("location: ../../signup.php?error=badsyntaxlname");
    exit();
  }

  #If email is not in the right format
  if (invalidEmail($email) == true ) {
    header("location: ../../signup.php?error=invalidemail");
    exit();
  }

  #If the passwords dont match
  if (passwdMatching($passwd, $passwdRepeat) == true ) {
    header("location: ../../signup.php?error=passwordsdontmatch");
    exit();
  }

  #If you the email is taken by another user.
  if (emailTaken($connection, $email) == true ) {
    header("location: ../../signup.php?error=emailalreadyexists");
    exit();
  }

 # INITIATE CREATION OF USER
 signupUser($connection, $fname, $lname, $email, $passwd);

} else {
  header("location: ../../signup.php");
}
