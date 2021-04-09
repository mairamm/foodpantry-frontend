<?php
session_start();
#if (!isset($_SESSION['QRcode'])) {
#  echo '<h1>ERROR 404 PAGE NOT FOUND</h1>';
#} else {}
    echo '<title>Signup - Foodpantry</title>';
    include('skel/header.php');
    include('skel/navbarSignup.php');
    include('queries/ins_person.php');
#====================================BODY=======================================
?>

<head>
    <link rel="stylesheet" href="assets/css/homePage/signup.css"/>
</head>

<p id='test'> </p>

<h1 class="text-center text-capitalize" style="font-size: 20px;color: #0c1975;"><br>Create your account by filling the form below.</h1>

<div class="login-card">
    <form action="" method="post" class="form-signin">
    <span class="reauth-email"></span>
    <strong>First Name</strong><small style="color: var(--red);">*</small>
    <input type="text" name="fname" class="form-control" id="fname" required placeholder="First Name" autofocus />

    <strong>Last Name</strong><small style="color: var(--red);">*</small>
    <input type="text" name="lname" class="form-control" id="lname" required placeholder="Last Name" autofocus />

    <strong>E-mail</strong><small style="color: var(--red);">*</small>
    <input type="email" name="email" class="form-control" id="email" required placeholder="Email address" autofocus />

    <strong>Password</strong><small style="color: var(--red);">*</small>
    <input type="password" name="passwd" class="form-control" id="passwd" required placeholder="Password" />

    <strong>Verify Password</strong><small style="color: var(--red);">*</small>
    <input type="password" name="passwdRepeat" class="form-control" id="passwdRepeat" required placeholder="Password" />

        <button class="btn btn-primary btn-block btn-lg btn-signin" type="Submit" name="signupUserSubmit">Sign up</button>
    </form>
</div>


<?php
#=================================END-BODY======================================
    include('skel/footer.php');
?>
</form>
</body>

</html>
