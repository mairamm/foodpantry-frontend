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

                <form id="application-form" style="background: url(&quot;./assets/img/white.jpg&quot;);color: #0c1975;">
                    <div class="form-group">
                        <p><strong>Email&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="email" name="" placeholder="rowdy@csub.edu">
                    </div>
                    <div class="form-group">
                        <p><strong>Password&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="password" required="" name="">
                    </div>
                    <br>
                <span class="submit"><a class="submit" role="button" href="#" style="background: #ffc629;color: rgb(0,0,0);padding: 8px 20px;">Log in</a></span>
                <br><br>
                </form>

            </div>
        </section>
    </section>

<?php
#=================================END-BODY======================================
    include('skel/footer.php');
?>

</html>
