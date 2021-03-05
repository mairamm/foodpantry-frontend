<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="Footer-Clean.css">
    <link rel="stylesheet" href="Header-Blue.css">
    <link rel="stylesheet" href="Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="Lightbox-Gallery.css">
    <link rel="stylesheet" href="Navigation-with-Button.css">
    <link rel="stylesheet" href="Simple-Slider.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<style>
img.barcode {
    border: 1px solid #ccc;
    padding: 20px 10px;
    border-radius: 5px;
}
</style>
<body style="color: rgb(0,0,0);font-size: 15px;text-align: center;">
    <div>
	<div class="alert alert-success" role="alert" style="background: #ffc629;margin: 0px 0px 1px;"><span style="text-align: center;color: rgb(0,0,0);font-size: 20px;"><strong>Alerts:&nbsp;</strong><a class="alert-link" href="#" style="color: rgb(0,0,0);">Covid-19<strong>&nbsp;|&nbsp;</strong></a><a class="alert-link" href="#" style="color: rgb(0,0,0);">Return to Campus<strong>&nbsp;|&nbsp;</strong></a><a class="alert-link" href="#" style="color: rgb(0,0,0);">CARES Act</a></span></div>
    </div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: #0c1975;">
	<div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);font-size: 35px;font-style: normal;font-family: Bitter, serif;">Food Pantry</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
	    <div class="collapse navbar-collapse" id="navcol-1">
		<ul class="navbar-nav mr-auto">
		    <li class="nav-item"><a class="nav-link active" href="#" style="color: rgb(255,255,255);">Donations</a></li>
		    <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(255,255,255);">Inventory</a></li>
		    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#" style="color: rgb(255,255,255);">Contact</a>
			<div class="dropdown-menu"><a class="dropdown-item" href="#">Phone number</a><a class="dropdown-item" href="#">Location</a></div>
		    </li>
		</ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="http://delphi.cs.csubak.edu/~foodpantry2/foodpantry-frontend/frontEnd/homePage/Homepage.php" style="background: #ffc629;color: rgb(0,0,0);">Sign Out</a></span>
	    </div>
	</div>
    </nav>
    <div class="simple-slider">
	<div class="swiper-container">
	    <div class="swiper-wrapper"></div>
	    <div class="swiper-pagination"></div>
	    <div class="swiper-button-prev"></div>
	    <div class="swiper-button-next"></div>
	</div>
	    </div>
    <div>
	<div class="container">
	    <div class="row">
		<div class="col">
		    <!--<p> -->
          <?php
          $conn = mysqli_connect('localhost', 'foodpantry', 'Dadp4Boxrl', 'foodpantry');
          if (!$conn) {
              die("Connection failed \n");
          }
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
        <!-- </p> -->
		    <div class="table-responsive">
			<table class="table">
			    <thead>
				<tr></tr>
			    </thead>
			    <tbody>
				<tr></tr>
				<tr></tr>
			    </tbody>
			</table>
		    </div>
		</div>
	    </div>
	</div>
    </div>
    <div class="footer-clean" style="padding: 0px;">
	<footer>
	    <div class="container">
		<div class="row justify-content-center" style="background: #0c1975;">
		    <div class="col-sm-4 col-md-3 item">
			<ul>
			    <li>&nbsp;</li>
			    <li style="color: rgb(255,255,255);"><a href="https://www.csub.edu/privacy/">Privacy</a></li>
			    <li style="color: rgb(255,255,255);"><a href="https://policies.csub.edu/">Policies</a></li>
			    <li style="color: rgb(255,255,255);"><a href="https://www.csub.edu/equity-inclusion-compliance/ada">Accessibility</a></li>
			    <li style="color: rgb(255,255,255);"><a href="https://www.csub.edu/campusmap/">Maps</a></li>


			</ul>
		    </div>
		    <div class="col-sm-4 col-md-3 item">
			<ul>
			    <li></li>
			    <li>&nbsp;</li>
			    <li style="color: rgb(249,249,249);"><a href="https://www.csub.edu/bas/police/index.html">University Police</a></li>
			    <li style="color: rgb(255,255,255);"><a href="https://www.csub.edu/">University</a></li>
			    <li style="color: rgb(255,255,255);"><a href="https://www.csub.edu/bas/policy/CampusSafetyPlan.pdf">Safety Plan</a></li>

			    <li style="color: rgb(255,255,255);"><a href="https://www.csub.edu/sustainability/foodpantry/FAQ_FoodPantry/index.html">FAQs</a></li>
</ul>
		    </div>
		    <div class="col-1 col-sm-4 col-md-3 offset-md-0 item">
			<ul></ul><small style="color: rgb(255,255,255);"><br>California State University, Bakersfield 9001 Stockdale Highway Bakersfield, CA 93311 (661)-654-CSUB<br></small><img class="img-fluid float-right bounce animated" src="../images/food_pantry_image.jpg" width="100" height="100" style="margin: 5px;padding: 5px;">
		    </div>
		</div>
	    </div>
	</footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
