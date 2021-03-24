<?php

# This page purpose is to check for the user login, and validate user
# This page can be included in the login.php page.
# This page also include dbh.inc.php & functions.inc.php

# Checking if a submit post request is initiated.
if (isset($_POST["submit"])) {
  $email = $_POST["email"];
  $passwd = $_POST["passwd"];

  # Including a connection to the databases
  # Including the functions page to the databases
  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  # ERROR HANDLER
  if (loginEmpty($email, $passwd) == true ) {
    header("location: ../login.php?error=emptyform");
    exit();
  }
  # Checking if email exists and password matches
  userLogin($connection, $email, $passwd);

} else {
  header("location: ../login.php");
  exit();
}
