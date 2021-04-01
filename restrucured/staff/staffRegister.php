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

    include('../assets/includes/dbh.inc.php');
    ?>
    <script type="text/javascript">
      window.onload = function() {
        var rand = generateRandString(8).toString();



        outputQRCodetoID("qrcode",rand);
      };
    </script>

    <?php
    ;
  }
?>
<br>
<br>
