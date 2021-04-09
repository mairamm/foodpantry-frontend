<?php
    include('skel/header.php');
    include('skel/navbar/homepage.php');
#====================================BODY=======================================
?>
<head>
    <link rel="stylesheet" href="./assets/css/lib/bootstrap.min.css">
</head>

<section class="page-section clearfix">
    <div class="container">
        <div class="intro"><img class="img-fluid intro-img mb-3 mb-lg-0 rounded" src="./assets/img/comeSign.jpg">
            <div class="text-center intro-text p-5 rounded bg-faded">
                <h2 class="section-heading mb-4"><span class="section-heading-upper">About Us</span><span class="section-heading-lower">Food Pantry</span></h2>
                <p class="mb-3"><p style="font-size: 16px;">The CSUB Food Pantry is open to CSUB students, staff, and faculty.
                <br>The Food Pantry is guided by the CSUB Food and Housing Security Committee, the Sustainability Department, and the Executive Director of Associated Students, Inc. The project goals are to increase food security, reduce food waste, and expand nutritional offerings at CSU Bakersfield.
                <br>Due to the temporary closure of the CSUB campus, the CSUB Food Pantry will have reduced hours of operation beginning March 18th, 2020.</p></p>
        </div>
    </div>
</section>


<div class="container">
    <div class="product-item">
        <div class="d-flex product-item-title">
            <div class="d-flex mr-auto bg-faded p-5 rounded">
                <img class="img-fluid d-flex mx-auto product-item-img mb-3 mb-lg-0 rounded" src="./assets/img/stockedShelf.jpg" style="width: 500px; padding-right: 20px;" />
                <h2 class="section-heading mb-0"><span class="section-heading-lower">How does it work? </span>
                <span class="section-heading-upper">Each visitor is allotted one visit per week and up to 16 points per visit</span>
                <img src="./assets/img/pointsExample.jpg" style="width: 520px"/>
                </h2>
            </div>
         </div>
    </div>
</div>

<br><br><br><br><br>

<div class="container">
    <div class="product-item">
        <div class="d-flex product-item-title">
            <div class="d-flex mr-auto bg-faded p-5 rounded">
                <div>
                <h2 class="section-heading mb-4">
                <span class="section-heading-lower">Our Location </span></h2>
                <p class="mb-3"><p style="font-size: 16px;">Hours of Operation During Closure:</p>
                <table style="font-size: 15px;">
                            <thead>
                                <tr>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10 a.m. - 2 p.m.</td>
                                    <td>2 p.m. - 6 p.m.</td>
                                    <td>10 a.m. - 2 p.m.</td>
                                    <td>2 p.m. - 6 p.m.</td>
                                    <td>10 a.m. - 2 p.m.</td>
                                </tr>
                </table>

                <p class="mb-3"><p style="font-size: 16px;">Volunteering:</p></p>
                <p style="font-size: 16px;">Want to volunteer at the Food Pantry, Edible Garden or at any of our Sustainability Events, Click below to sign up!</p>
                <a href="https://signup.com/go/xrLkksd"><img src="./assets/img/volunteerBtn.png"/></a>
            </div>
            <img class="img-fluid d-flex mx-auto product-item-img mb-3 mb-lg-0 rounded" src="./assets/img/Food pantry map.png" style="width: 500px;" />
            </div>
         </div>
    </div>
</div>

<br><br><br>

<?php
#=================================END-BODY======================================
    include('skel/footer.php');
?>
