<!DOCTYPE html>

<?php
echo '<title>Login - Foodpantry</title>';
    include('skel/header.php');
    include('skel/navbarHome.php');

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
                        <p><strong>Email&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="email" name="email" placeholder="rowdy@csub.edu">
                    </div>
                    <div class="form-group">
                        <p><strong>Password&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="password" required="" name="passwd">
                    </div>
                    <br>
                <button class="btn btn-primary btn-block" type="submit" name="loginUserSubmit">Log in</button>
                <br><br>
                </form>
                <?php
                      echo '<p>DEBUGING OUTPUT:</p>';
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
