<?php
echo '<title> Consumer Controller - Foodpantry</title>';
    include('../../skel/header.php');
    include('../../skel/navbar/consumerC.php');
    include('../../assets/includes/staff/staffFunctions.inc.php');
#====================================BODY=======================================

// This include below is just for you to include this link to the method next to the post request when trying to write this page
//    include('../../assets/includes/staff/consumerC/delete_consumer.inc.php');
?>

    <body>
    <form action="../../assets/includes/staff/consumerC/delete_consumer.inc.php" method="post">
    <main class="page lanidng-page"></main>
    <section class="portfolio-block website gradient" style="background: url(&quot;./assets/img/gray.png&quot;);">

    <section>
    <div class="container">
    <form id="application-form" style="background: url(&quot;./assets/img/white.jpg&quot;);color: #0c1975;">
    <div class="form-group">
    <div class="form-row">

    <p><label for="consumer-type">Consumer ID</label><input class="form-control" type="ID" name="consumer-type" id="consumer-type">

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

