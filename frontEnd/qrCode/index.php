<head>
<?php
# for connecting with mysql db
include('connect.php');
?>
</head>
<title>Barcode</title>
<style>
img.barcode {
    border: 1px solid #ccc;
    padding: 20px 10px;
    border-radius: 5px;
}
</style>
<h2>Barcode Generator</h2>

<!---SECTION COMMUNICATING WITH barcode.php FOR BARCODE GENERATION--->
<!-- Code runs automatically when page is loaded.
     QRcode query is hard coded and only an example
      of how to use this file with barcode.php -->
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

</div>
</div>
<div style="margin:50px 0px 0px 0px;">
</div>
