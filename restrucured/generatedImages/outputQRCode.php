<?php
# lib required for qrcode output
require_once 'phpqrcode/qrlib.php';

# generates png of qrcode with given text input
#   can auto generate qrcode by dynamically assigning website link
QRcode::png("https://google.com");
?>
