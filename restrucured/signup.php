<?php
session_start();
#if (!isset($_SESSION['QRcode'])) {
#  echo '<h1>ERROR 404 PAGE NOT FOUND</h1>';
#} else {}
    include('skel/header.php');
    include('skel/navbarReg.php');
#====================================BODY=======================================
?>
<body>
    <main class="page lanidng-page"></main>
    <section class="portfolio-block website gradient" style="background: url(&quot;./assets/img/gray.png&quot;);">
            <h1 class="text-center text-capitalize" style="font-size: 20px;color: #0c1975;"><br>Create your account by filling the form below.<br></h1>
            <div class="container">
                <form id="application-form" style="background: url(&quot;./assets/img/white.jpg&quot;);color: #0c1975;">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <p><strong>First Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="fname">
                            </div>
                            <div class="col">
                                <p><strong>Last Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="lname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p><strong>Email&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="email" name="email" placeholder="rowdy@csub.edu">
                    </div>
                    <div class="form-group">
                        <p><strong>Password&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="passwd">
                    </div>
                    <div class="form-group">
                        <p><strong>Verify Password&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="passwdRepeat">
                    </div>

                <br>
                <span class="submit"><a class="submit" role="button" name="signupUserSubmit" href="#" style="background: #ffc629;color: rgb(0,0,0);padding: 8px 20px;">Sign me up!</a></span>
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
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/Application-Form-1.js"></script>
    <script src="./assets/js/Application-Form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="./assets/js/theme.js"></script>

</body>

<?php
#=================================END-BODY======================================
    include('skel/footer.php');
?>

</html>
