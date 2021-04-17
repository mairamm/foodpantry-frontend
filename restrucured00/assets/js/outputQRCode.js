
// library necessary to output qr code
document.write('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" ></script>');

function outputQRCodeforRegistration(id, data) {
  var host = window.location.host;
  var link = host + "/project/foodpantryTEST/"
    + "foodpantry-frontend/restrucured00/signup.php?qrcode="
    + data;
  //var link = "google.com";
  var qrc = new QRCode(document.getElementById(id), {
  text: link,
  width: 350,
  height: 350,
  correctLevel: QRCode.CorrectLevel.L
  });
}

function outputQRCodeforCheckout(id, data) {
  var qrc = new QRCode(document.getElementById(id), {
  text: data,
  width: 350,
  height: 350,
  correctLevel: QRCode.CorrectLevel.L
  });
}
