<?php
session_start();
#if (!isset($_SESSION['QRcode'])) {
#  echo '<h1>ERROR 404 PAGE NOT FOUND</h1>';
#} else {}
    echo '<title>Signup - Foodpantry</title>';
    include('skel/header.php');
    include('skel/navbarSignup.php');
#====================================BODY=======================================
?>
<body>
<form action="" method="post">
    <main class="page lanidng-page"></main>
    <section class="portfolio-block website gradient" style="background: url(&quot;./assets/img/gray.png&quot;);">
            <h1 class="text-center text-capitalize" style="font-size: 20px;color: #0c1975;"><br>Create your account by filling the form below.<br></h1>
            <div class="container">
                <form action="assets/includes/signup.inc.php" method="post"
                id="application-form" style="background: url(&quot;./assets/img/white.jpg&quot;);color: #0c1975;">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <p><label for="first-name"><strong>First Name</strong></label>&nbsp;<span class="text-danger">*</span><input class="form-control" type="text" name="fname" id="fn"></p>
                            </div>
                            <div class="col">
                                <p><label for="last-name"><strong>Last Name</strong>&nbsp;</label><span class="text-danger">*</span><input class="form-control" type="text" name="lname" id="ln"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p><label for="email"><strong>Email&nbsp;</strong></label><span class="text-danger">*</span><input class="form-control" type="email" name="email" placeholder="rowdy@csub.edu" id="em"></p>
                    </div>
                    <div class="form-group">
                        <p><label for="password"><strong>Password&nbsp;</strong></label><span class="text-danger">*</span><input class="form-control" type="password" name="passwd" id="pswd"></p>
                    </div>
                    <div class="form-group">
                        <p><label for="verify-password"><strong>Verify Password&nbsp;</strong></label><span class="text-danger">*</span><input class="form-control" type="password" name="passwdRepeat" id="vpswd"></p>
                    </div>

                <br>
                <button class="btn btn-primary btn-block" type="submit" name="signupUserSubmit">Sign Up</button>
                <br>
              <br>
                </form>
            </div>
            <?php
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
    </section>

<?php
#=================================END-BODY======================================
    include('skel/footer.php');
?>
</form>
</body>

</html>
