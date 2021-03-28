
// library necessary to output qr code
document.write('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" ></script>');

function outputQRCodetoID(id, data) {
  console.log(id);
  console.log(data);
  var qrc = new QRCode(document.getElementById(id), data);
}
