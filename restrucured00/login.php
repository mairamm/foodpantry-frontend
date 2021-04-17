<?php
echo '<title>Login - Foodpantry</title>';
    include('skel/header.php');
    include('skel/navbar/login.php');

#====================================BODY=======================================
?>
<head>
    <link rel="stylesheet" href="assets/css/homePage/login.css"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
</head>

<section class="page-section clearfix">
<div class="container">
 <div class="product-item">

    <div class="login-card" style="text-align: center;">
        <form action="assets/includes/loginSystem/login.inc.php" method="post" id="application-form" class="form-signin">
        <input type="email" class="form-control" name="email" id="em" required placeholder="Email address" autofocus />
        <input type="password" class="form-control" id="pswd" name="passwd" required placeholder="Password" />
        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" value="submit" id="loginUserSubmit" name="loginUserSubmit" role="button" style="text-align: center;">Sign In</button>

        <p>Don't have an account?</p>
        <center><button class="btn btn-primary btn-block btn-lg btn-signin" id="signupB" type="submit" style="width: 200px;text-align: center;">Sign Up</button></center>
      </form>
    </div>
 </div>
</div>
</section>

<br><br><br>

<?php
#=================================END-BODY======================================
    include('skel/footer.php');
?>
