<?php
    echo '<title> Staff Check Out - Foodpantry</title>';
    include('../../skel/header.php');
    include('../../skel/navbar/staff.php');
    include('../../assets/includes/staff/staffFunctions.inc.php');

#====================================BODY=======================================\
?>

<html>

<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <video id="preview" width="100%"></video>
                </div>
                <div class="col-md-6">
                    <label>qrcodeid</label>
                    <input type="text" name="qrcodeid" id="qrcodeid" readonly="true" placeholder="scan qrcode" class="form-control">
                    <br>
                    <label>Point Balance</label>
                    <input type="text" name="pointBalance" id="pointBalance" readonly="true" placeholder="" class="form-control">
                    <br><br>
                    <label>Total</label>
                    <input type="number" name="total" id="total" placeholder="enter points due" class="form-control"><br>
                    <button class="btn btn-primary btn-block btn-lg btn-signin" id="checkout" type="submit" style="width: 200px;text-align: center;">Check Out</button>
                </div>
            </div>
        </div>

        <script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               document.getElementById('qrcodeid').value=c;
           });

        </script>
    </body>

</html>
