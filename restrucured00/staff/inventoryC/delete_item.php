<?php
echo '<title> Inventory Controller - Foodpantry</title>';
    include('../../skel/header.php');
    include('../../skel/navbar/consumerC.php');
    include('../../assets/includes/staff/staffFunctions.inc.php');

#====================================BODY=======================================\
?>
<body>
<form action="../../assets/includes/staff/inventoryC/delete_item.inc.php" method="post">
<main class="page lanidng-page"></main>
<section class="portfolio-block website gradient" style="background: url(&quot;./assets/img/gray.png&quot;);">

<section>
<div class="container">
<form id="application-form" style="background: url(&quot;./assets/img/white.jpg&quot;);color: #0c1975;">
<div class="form-group">
<div class="form-row">

<p><label for="prod-id">Product ID</label><input class="form-control" type="ID" name="prod-id" id="prodid">

<br>
<!--
<input type="Submit" value="Submit" style="background: #ffc629;color: rgb(0,0,0);padding: 8px 20px;">
-->
<button class="btn btn-primary btn-block" type="Submit" name="Submit">Submit</button>
<br>
<br>
</form>
</div>
</div>
</div>
</section>
</section>

