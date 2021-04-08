<?php
echo '<title> Homepage - Foodpantry</title>';
    include('skel/header.php');
    include('skel/navbar/consumer.php');
    include('./assets/includes/consumer/consumerFunctions.inc.php');

#====================================BODY=======================================

    include('./consumer/view_points.php');
    include('./consumer/view_qrcode.php');

#=================================END-BODY======================================
    include('skel/footer.php');
?>
