<?php
echo '<title> Homepage - Foodpantry</title>';
    include('skel/header.php');
    include('skel/navbar/consumer.php');
    include('./assets/includes/consumer/consumerFunctions.inc.php');

#====================================BODY=======================================
?>

<form action="./consumer/view_qrcode.php" method="post" class="form-inline">
  <button type="submit" name="submitViewQRcode" class="btn btn-primary mb-2">View QR code</button>
</form>

<form action="./consumer/view_points.php" method="post" class="form-inline">
  <button type="submit" name="submitViewPoints" class="btn btn-primary mb-2">View available points</button>
</form>

<?php
#=================================END-BODY======================================
    include('skel/footer.php');
?>
