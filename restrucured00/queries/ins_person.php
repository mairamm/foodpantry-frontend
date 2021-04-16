<?php
//displays all errors or warnings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// once button is pressed, run
if (isset($_POST["signupUserSubmit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $passwd = $_POST["passwd"];
    $passwdRepeat = $_POST["passwdRepeat"];
    $checksPassed = true;

    //include handles connection to the database
    require_once ('./assets/includes/dbh.inc.php');
    require_once ('ins_personFunc.inc.php');

    // if not directed from QRcode
    //  let user know to visit pantry to sign up
    if (!isset($_GET["qrcode"])) {
      echo "Must visit Foodpantry to complete registration";
      exit();
    } else {
      $QRcode = $_GET["qrcode"];
    }
    // checking correct name syntax
    if (badSyntaxFname($fname) == true) {
      echo "No Numbers, or spaces for names ";
      $checksPassed = false;
    }
    if (badSyntaxLname($lname) == true) {
      echo "No Numbers, or spaces for names ";
      $checksPassed = false;
    }
    // checking correct email syntax
    if (invalidEmail($email) == true) {
      echo "Email inputted incorrectly ";
      $checksPassed = false;
    }
    // if passwords do not match
    if (passwdMatching($passwd, $passwdRepeat) == true) {
      echo "Passwords must match ";
      $checksPassed = false;
    }
    // if email taken by another user
    if (emailTaken($connection, $email) == true) {
      echo "Email already in use ";
      $checksPassed = false;
    }

    // if passed all checks, insert into the database
    if ($checksPassed == true) {
      signupUser($connection, $QRcode, $fname, $lname, $email, $passwd);
    }
}

?>
