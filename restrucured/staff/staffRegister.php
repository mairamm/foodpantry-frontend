<?php
include('../skel/header.php');
include('../skel/navbarRegisterNew.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
?>

<?php
  if(isset($_POST['QRCodeGenButton'])) {
    echo "<p> test </p>";
    echo "<script>console.log('test');</script>";
  }
?>

<br>
<br>
