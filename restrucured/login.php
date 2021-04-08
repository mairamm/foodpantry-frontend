<!DOCTYPE html>
<?php
echo '<title>Login - Foodpantry</title>';
    include('skel/header.php');
    include('skel/navbar/login.php');

#====================================BODY=======================================
?>

<section class="page-section clearfix">
<div class="container">
 <div class="product-item">

    <img src="./assets/img/fpLogo.jpg" style="width: 350px; padding-left: 90px; padding-top:60px;"/>

    <div class="login-card" style="text-align: center;">
        <form action="assets/includes/login.inc.php" method="post" id="application-form" class="form-signin">
        <input type="email" class="form-control" name="email" id="em" required placeholder="Email address" autofocus />
        <input type="password" class="form-control" id="pswd" name="passwd" required placeholder="Password" />
        <input type="submit" value="submit" name="loginUserSubmit" style="background: #ffc629;color: rgb(0,0,0);padding: 8px 20px;">
        </form>
        <p>Don't have an account?</p>
    <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" style="width: 200px;text-align: center;">Sign Up</button>
    </div>
 </div>
</div>

</section>

<br><br><br>

<?php
#=================================END-BODY======================================
    include('skel/footer.php');
?>
