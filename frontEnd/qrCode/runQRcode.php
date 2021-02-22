<?php
# Gathering query for barcode
if ($result = $conn->query("SELECT QRcode FROM individual i WHERE i.QRcode = 'bbdul';")){
  $row = mysqli_fetch_array($result);   # Gathers query results and puts it into row
  echo 'for user with QRcode ID: ';
  echo $row[0];                         # row[0] signifies first tuple in query
  $str = strval($row[0]);               # convert query result to string
  $barcodeText = trim($str);            #   ,and pass result to $barcodeText
}

# Barcode parameters
$barcodeType='code128';                 # can be code128, codabar, or code39
$barcodeDisplay='horizontal';           # horizontal/vertical
$barcodeSize='20';
$printText='true';                      # to print text below barcode itself
$result -> free_result();

# Outputs barcode via echoing barcode.php
if($barcodeText != '') {
  echo '<h4>Barcode:</h4>';
  echo '<img class="barcode" alt="'.$barcodeText.'" src="barcode.php?text='.$barcodeText.'&codetype='.$barcodeType.'&orientation='.$barcodeDisplay.'&size='.$barcodeSize.'&print='.$printText.'"/>';
} else {
  echo '<div class="alert alert-danger">Enter product name or number to generate barcode!</div>';
}
?>
