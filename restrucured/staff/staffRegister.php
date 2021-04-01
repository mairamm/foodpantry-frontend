<?php
include('../skel/header.php');
include('../skel/navbarRegisterNew.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
?>

<script src="../assets/js/outputQRCode.js"></script>
<script src="../assets/js/randStringGenerator.js"></script>

<body>
  <div id="qrcode"></div>
</body>

<?php
  if(isset($_POST['QRCodeGenButton'])) {
    // include qrcode functions
    include('../assets/includes/qrcodeFunctions.inc.php');

    // generate random string
    $qrcodeid = generateRandString();
    // check if string generated is unique for QRcode ID
    if (qrCodeIDIsUnique($qrcodeid)) {
      // if it is, output the QRCode to the screen
      ?>
      <script type="text/javascript">
        window.onload = function() {
          qrcodeid = "<?php echo $qrcodeid; ?>";
          outputQRCodetoID("qrcode",qrcodeid);
        };
      </script>
      <?php
    }


    ;
  }
?>
<br>
<br>
