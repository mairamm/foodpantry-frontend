
<?php
    include('skel/header.php');
    include('skel/navbar/staff.php');
    include('./assets/includes/staff/staffFunctions.inc.php');
    include('./assets/includes/dbh.inc.php');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
#====================================BODY=======================================


    include('./assets/includes/staff/inventoryC/view_inventoryAndBrands.inc.php');


#=================================END-BODY======================================
?>
