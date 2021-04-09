
// library necessary to output qr code
document.write('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" ></script>');

function outputQRCodetoID(id, data) {
  var link = "174.135.102.61/project/foodpantryTEST/"
    + "foodpantry-frontend/restrucured/testSignup.php?qrcode="
    + data;
  //var link = "google.com";
  var qrc = new QRCode(document.getElementById(id), {
  text: link,
  width: 350,
  height: 350,
  correctLevel: QRCode.CorrectLevel.L
  });
}
