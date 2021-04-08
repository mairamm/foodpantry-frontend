<?php
session_start();
#if (!isset($_SESSION['QRcode'])) {
#  echo '<h1>ERROR 404 PAGE NOT FOUND</h1>';
#} else {}
    echo '<title>Signup - Foodpantry</title>';
    include('skel/header.php');
    include('skel/navbar/signup.php');
#====================================BODY=======================================
?>

<head>
    <link rel="stylesheet" href="assets/css/homePage/signup.css"/>
</head>

<h1 class="text-center text-capitalize" style="font-size: 20px;color: #0c1975;"><br>Create your account by filling the form below.</h1>

<div class="login-card">
    <form action="./assets/includes/signup.inc.php" method="post" class="form-signin">
    <span class="reauth-email"></span>
    <strong>First Name</strong><small style="color: var(--red);">*</small>
    <input type="text" name="fname" class="form-control" id="inputEmail" required placeholder="First Name" autofocus />

    <strong>Last Name</strong><small style="color: var(--red);">*</small>
    <input type="text" name="lname" class="form-control" id="inputEmail-1" required placeholder="Last Name" autofocus />

    <strong>E-mail</strong><small style="color: var(--red);">*</small>
    <input type="email" name="email" class="form-control" id="inputEmail" required placeholder="Email address" autofocus />

    <strong>Password</strong><small style="color: var(--red);">*</small>
    <input type="password" name="passwd" class="form-control" id="inputPassword" required placeholder="Password" />

    <strong>Verify Password</strong><small style="color: var(--red);">*</small>
    <input type="password" name="passwdRepeat" class="form-control" id="inputPassword" required placeholder="Password" />

        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="signupUserSubmit">Sign up</button>
    </form>
</div>

<?php
// If statements for outputting errors based on the logic of signup.inc.php
      if(isset($_GET["error"])) {
        if ($_GET["error"] == "emptyform") {
          echo "<p>Fill in the fields</p>";
        }elseif ($_GET["error"] == "badsyntaxfname") {
          echo "<p>Email format is wrong!</p>";
        }elseif ($_GET["error"] == "badsyntaxlname") {
          echo "<p>Email format is wrong!</p>";
        }elseif ($_GET["error"] == "invalidemail") {
          echo "<p>Email format is wrong!</p>";
        }elseif ($_GET["error"] == "passwordsdontmatch") {
          echo "<p>OH MY GOD the password is doesnt match. do it again...</p>";
        }elseif ($_GET["error"] == "emailalreadyexists") {
          echo "<p>Email alread exists in the databases! hmmm...OO </p>";
        }elseif ($_GET["error"] == "sqlfail") {
          echo "<p>statment failed lol</p>";
        }elseif ($_GET["error"] == "noerror") {
          echo "<p>Employee has been registered! Cool! what is next? </p>";
        }
      }
     ?>

<?php
#=================================END-BODY======================================
    include('skel/footer.php');
?>
