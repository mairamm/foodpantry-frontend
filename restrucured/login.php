<!DOCTYPE html>

<?php
echo '<title>Login - Foodpantry</title>';
    include('skel/header.php');
    include('skel/navbarLogin.php');

#====================================BODY=======================================
?>

<body>
    <main class="page lanidng-page"></main>
    <section class="portfolio-block website gradient" style="background: url(&quot;./assets/img/gray.png&quot;);">
        <section>
            <div class="container">

                <form action="assets/includes/login.inc.php" method="post"
                id="application-form" style="background: url(&quot;./assets/img/white.jpg&quot;);color: #0c1975;">
                    <div class="form-group">
                        <p><label for="email"><strong>Email&nbsp;</strong></label><span class="text-danger">*</span></p><input class="form-control" type="email" name="email" placeholder="rowdy@csub.edu" id="em">
                    </div>
                    <div class="form-group">
                        <p><label for="password"><strong>Password&nbsp;</strong></label><span class="text-danger">*</span></p><input class="form-control" type="password" name="passwd" id="pswd">
                    </div>
                    <br>
                <input type="submit" value="submit" name="loginUserSubmit" style="background: #ffc629;color: rgb(0,0,0);padding: 8px 20px;">
                <br><br>
                </form>
                <?php
                     // echo '<p>DEBUGING OUTPUT:</p>';
                      session_start();
                      echo $_SESSION['debugPasswd'];
                      unset($_SESSION['debugPasswd']);
                ?>

            </div>
        </section>
    </section>

<?php
#=================================END-BODY======================================
    include('skel/footer.php');
?>

</html>
