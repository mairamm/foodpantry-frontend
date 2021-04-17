<?php
session_start();
echo '<title> View Qrcode - Foodpantry</title>';
    include('../skel/header.php');
    include('../skel/navbar/consumer.php');

#====================================BODY=======================================
#Debugging code
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<script src="../assets/js/outputQRCode.js"></script>

<body>
  <div id="qrcode"></div>
</body>
<?php
if (isset($_SESSION['qrcodesess'])) {
  $qrcodeid = $_SESSION['qrcodesess']; // debugging
  echo $qrcodeid;                      // debugging 

  ?>
  <script type="text/javascript">
    window.onload = function() {
      qrcodeid = "<?php echo $qrcodeid; ?>";
      outputQRCodetoID("qrcode",qrcodeid);
    };
  </script>
  <?php
}



// This include below is just for you to include this link to the method next to the post request when trying to write this page
    include('../assets/includes/consumer/view_qrcode.inc.php');
#=================================END-BODY======================================
?>
