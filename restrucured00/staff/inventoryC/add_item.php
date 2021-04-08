<?php
echo '<title> Inventory Controller - Foodpantry</title>';
    include('../../skel/header.php');
    include('../../skel/navbar/consumerC.php');
    include('../../assets/includes/staff/staffFunctions.inc.php');

#====================================BODY=======================================\
?>
<body>
<form action="../../assets/includes/staff/inventoryC/add_item.inc.php" method="post">
<main class="page lanidng-page"></main>
<section class="portfolio-block website gradient" style="background: url(&quot;./assets/img/gray.png&quot;);">

<section>
<div class="container">
<form id="application-form" style="background: url(&quot;./assets/img/white.jpg&quot;);color: #0c1975;">
<div class="form-group">
<div class="form-row">

<p><label for="prod-id">Product ID</label><input class="form-control" type="text" name="prod-id" id="prodid"></p>
<p><label for="brand-id">Brand ID</label><input class="form-control" type="text" name="brand-id" id="brand-id"></p>
<p><label for="quantity">Quantity</label><input class="form-control" type="text" name="quantity" id="quant"></p>
<p><label for="point-cost">Point cost</label><input class="form-control" type="text" name="point-cost" id="cost"></p>
<p><label for="expiration-date">Expiration date</label><input class="form-control" type="text" name="expiration-date" id="expire"></p>
<p><label for="brand-name">Brand name</label><input class="form-control" type="text" name="brand-name" id="brandname"></p>
<p><label for="produce-type">Produce type</label><input class="form-control" type="text" name="produce-type" id="prodtype"></p>

<br>
<input type="submit" value="submit" style="background: #ffc629;color: rgb(0,0,0);padding: 8px 20px;">
<br>
<br>
</div>
</div>
</div>
</section>
</section>


<?php
#=================================END-BODY======================================
    include('../../skel/footer.php');
?>
