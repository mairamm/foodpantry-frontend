<!DOCTYPE html>
<html>

<?php
include('../skel/header.php');
include('../skel/navbarAdd.php');
include('../queries/update_inv.php');
?>

<body>
<form action="" method="post">
<main class="page lanidng-page"></main>
<section class="portfolio-block website gradient" style="background: url(&quot;./assets/img/gray.png&quot;);">

<section>
<div class="container">
<form id="application-form" style="background: url(&quot;./assets/img/white.jpg&quot;);color: #0c1975;">
<div class="form-group">
<div class="form-row">

<p><label for="prod-id">Product ID</label><input class="form-control" type="ID" name="prod-id" id="prodid"></p>
<p><label for="quantity">Quantity</label><input class="form-control" type="text" name="quantity" id="quantity"></p>
<p><label for="point-cost">Point cost</label><input class="form-control" type="text" name="point-cost" id="pointcost"></p>
<p><label for="expiration-date">Expiration date</label><input class="form-control" type="text" name="expiration-date" id="expirationdate"></p>

<br>
<!--
<input type="Submit" value="Submit" style="background: #ffc629;color: rgb(0,0,0);padding: 8px 20px;">
-->
<button class="btn btn-primary btn-block" type="Submit" name="Submit">Submit</button>
<br>
<br>
</div>
</div>
</div>
</section>
</section>

<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/Application-Form-1.js"></script>
<script src="./assets/js/Application-Form.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
<script src="./assets/js/theme.js"></script>
</form>
</body>

</html>
