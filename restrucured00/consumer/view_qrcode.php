<?php
echo '<title> View Qrcode - Foodpantry</title>';
    include('../skel/header.php');
    include('../skel/navbar/consumer.php');

#====================================BODY=======================================
?>

<script src="../assets/js/outputQRCode.js"></script>

<body>
  <div id="qrcode"></div>
</body>
<?php




// This include below is just for you to include this link to the method next to the post request when trying to write this page
    include('../assets/includes/consumer/view_qrcode.inc.php');
#=================================END-BODY======================================
?>
