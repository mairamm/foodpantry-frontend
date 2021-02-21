<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>worker</title>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="Bootstrap.min.js">
<link rel="stylesheet" href="jquery.min.js">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
<div>
<div class="alert alert-success text-center" role="alert" style="background: #ffc629;margin: 0px 0px 1px;"><span style="text-align: center;color: rgb(0,0,0);font-size: 20px;"><strong>Alerts:&nbsp;</strong><a class="alert-link" href="#" style="color: rgb(0,0,0);">Covid-19<strong>&nbsp;|&nbsp;</strong></a><a class="alert-link" href="#" style="color: rgb(0,0,0);">Return to Campus<strong>&nbsp;|&nbsp;</strong></a><a class="alert-link" href="#" style="color: rgb(0,0,0);">CARES Act</a></span></div>
</div>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: #0c1975;">
<div class="container"><a class="navbar-brand text-left" href="#" style="color: rgb(255,255,255);font-size: 35px;font-style: normal;font-family: Bitter, serif;">Food Pantry</a>
<div class="container"><button class="btn btn-primary ml-auto" type="button">Add</button><button class="btn btn-primary ml-auto" type="button">Update</button><button class="btn btn-primary m-auto" type="button">Delete</button></div><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
</div>
</nav>


<?php

$servername = "localhost";
$username = "username";
$password = "password";

$conn = mysqli_connect('localhost', 'foodpantry', 'Dadp4Boxrl', 'foodpantry');
if (!$conn) {
    die("Connection failed \n");
}


?>

    <div class="footer-clean" style="padding: 0px;">
	<footer>
	<div class="container">
	<p>This will show the tables for the food items</p>
	</div>
	</footer>
	</div>
	<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
