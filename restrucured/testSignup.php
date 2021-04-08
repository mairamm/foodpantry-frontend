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

<head>
    <link rel="stylesheet" href="assets/css/homePage/signup.css"/>
</head>

<h1 class="text-center text-capitalize" style="font-size: 20px;color: #0c1975;"><br>Create your account by filling the form below.</h1>

<div class="login-card">
    <form class="form-signin">
    <span class="reauth-email"></span>
    <strong>First Name</strong><small style="color: var(--red);">*</small>
    <input type="email" class="form-control" id="inputEmail" required placeholder="First Name" autofocus />
    <strong>Last Name</strong><small style="color: var(--red);">*</small><input type="email" class="form-control" id="inputEmail-1" required placeholder="Last Name" autofocus />
    <strong>E-mail</strong><small style="color: var(--red);">*</small>
    <input type="email" class="form-control" id="inputEmail" required placeholder="Email address" autofocus />
    <strong>Password</strong><small style="color: var(--red);">*</small><input type="password" class="form-control" id="inputPassword" required placeholder="Password" />
    <strong>Verify Password</strong><small style="color: var(--red);">*</small><input type="password" class="form-control" id="inputPassword" required placeholder="Password" />
        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign up</button>
    </form>
</div>


<?php
#=================================END-BODY======================================
    include('skel/footer.php');
?>
</form>
</body>

</html>
