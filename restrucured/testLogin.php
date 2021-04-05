<!DOCTYPE html>
<?php
    include('skel/header.php');
    include('skel/navbarLogin.php');
?>
<head>
    <link rel="stylesheet" href="assets/css/homePage/login.css"/>
</head>


<section class="page-section clearfix">
<div class="container">
 <div class="product-item">
    
    <img src="assets/img/fpLogo.jpg" style="width: 350px; padding-left: 90px; padding-top:60px;"/>
    
    <div class="login-card" style="text-align: center;">
        <form class="form-signin"><span class="reauth-email"></span><input type="email" class="form-control" id="inputEmail" required placeholder="Email address" autofocus /><input type="password" class="form-control" id="inputPassword" required placeholder="Password" />
            <div class="checkbox"></div><button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
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
