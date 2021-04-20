<?php

# This page is dedicated to unset & destroy all sessions in order to log out the user

session_start();
session_unset();
session_destroy();

#index.php is a sample, to be changed once I work with front end team
header("location: ../../../home.php");
exit();
