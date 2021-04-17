<?php
echo '<title> Inventory Controller - Foodpantry</title>';
    include('../../skel/header.php');
    include('../../skel/navbar/consumerC.php');
    include('../../assets/includes/staff/staffFunctions.inc.php');

#====================================BODY=======================================\
?>
<body>
<form action="../../assets/includes/staff/inventoryC/update_item.inc.php" method="post">
<main class="page lanidng-page"></main>
<section class="portfolio-block website gradient" style="background: url(&quot;./assets/img/gray.png&quot;);">

<section>
<div class="container">
<form id="application-form" style="background: url(&quot;./assets/img/white.jpg&quot;);color: #0c1975;">
<div class="form-group">
<div class="form-row">

<p><label for="prod-id">Product ID</label><input class="form-control" type="ID" name="prod-id" id="prodid"></p>
<p><label for="brand-id">Brand ID</label><input class="form-control" type="ID" name="brand-id" id="brandid"></p>
<p><label for="quantity">Quantity</label><input class="form-control" type="text" name="quantity" id="quantity"></p>
<p><label for="point-cost">Point cost</label><input class="form-control" type="text" name="point-cost" id="pointcost"></p>
<p><label for="expiration-date">Expiration date</label><input class="form-control" type="text" name="expiration-date" id="expirationdate"></p>
<p><label for="brand-name">Brand Name</label><input class="form-control" type="text" name="brand-name" id="brandname"></p>
<p><label for="produce-type">Produce Type</label><input class="form-control" type="text" name="produce-type" id="producetype"></p>
<p><label for="prod-pic">Product Picture</label><input class="form-control" type="text" name="prod-pic" id="prodpic"></p>

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

