<!DOCTYPE html>
<html>

<?php
    include('skel/header.php');
    include('skel/navbarReg.php');
?>

<body>
    <main class="page lanidng-page"></main>
    <section class="portfolio-block website gradient" style="background: url(&quot;./assets/img/gray.png&quot;);">
        <section>
            <h1 class="text-center text-capitalize" style="font-size: 20px;color: #0c1975;"><br>Create your account by filling the form below.<br></h1>
            <div class="container">
                <form id="application-form" style="background: url(&quot;./assets/img/white.jpg&quot;);color: #0c1975;">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <p><strong>First Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="">
                            </div>
                            <div class="col">
                                <p><strong>Last Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p><strong>Email&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="email" name="" placeholder="rowdy@csub.edu">
                    </div>
                    <div class="form-group">
                        <p><strong>Password&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="">
                    </div>
                    <div class="form-group">
                        <p><strong>Verify Password&nbsp;</strong><span class="text-danger">*</span></p><input class="form-control" type="text" required="" name="">
                    </div>
                </form>
            </div>
        </section>
    </section>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/Application-Form-1.js"></script>
    <script src="./assets/js/Application-Form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="./assets/js/theme.js"></script>
<br>
<span class="submit"><a class="submit" role="button" href="#" style="background: #ffc629;color: rgb(0,0,0);padding: 8px 20px;">Submit</a></span>
<br>

</body>

<?php
    include('skel/footer.php');
?>

</html>
