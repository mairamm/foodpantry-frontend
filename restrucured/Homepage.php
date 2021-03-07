<!DOCTYPE html>
<html>

<head>
<?php
    include('skel/header.php');
    include('skel/navbarHome.php');
?>
</head>
        <div class="swiper-container">
            <div class="swiper-wrapper"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="1000" id="carousel-1">
            <div class="carousel-inner">
                <div class="carousel-item active"><img class="w-100 d-block" src="./assets/img/manSpeaking.jpg" alt="Slide Image" width="800" height="533" /></div>
                <div class="carousel-item">
                    <p class="lead"><br />&quot;CSUB Food Pantry &amp; Edible Garden: A holistic Approach to Fighting Campus Food Insecurities&quot;<br /><br /></p><img class="w-100 d-block" src="./assets/img/EdibleGardenSignandRaisedBed.jpg" alt="Slide Image" width="800" height="300" />
                </div>
                <div class="carousel-item"><img class="w-100 d-block" src="./assets/img/Food pantry map.png" alt="Slide Image" /></div>
                <div class="carousel-item"><img class="w-100 d-block" src="./assets/img/stockedShelf.jpg" alt="Slide Image" /></div>
                <div class="carousel-item"><img class="w-100 d-block" src="./assets/img/distribution.webp" alt="Slide Image" /></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li dta-target="#carousel-1" data-slide-to="2"></li>
                <li data-target="#carousel-1" data-slide-to="3"></li>
                <li data-target="#carousel-1" data-slide-to="4"></li>
            </ol>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p style="margin: 0px 0px 0px;">How does it work?</p>
                    <p><br />Each visitor gets one visit per week and up to 16 points per visit. Each item in stock have unique points given<br /></p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>1 POINT</th>
                                    <th>2 POINT</th>
                                    <th>3 POINT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Side Dish or Non-Food Item</td>
                                    <td>One Meal</td>
                                    <td>Items Lasting Multiple Meals</td>
                                </tr>
                                <tr>
                                    <td>Granola Bar</td>
                                    <td>Canned Soup</td>
                                    <td>Box of Pasta</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr></tr>
                            </thead>
                            <tbody>
                                <tr></tr>
                                <tr>
                                    <td>Canned Fruit</td>
                                    <td>Chili</td>
                                    <td>Boxed Cereal</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Full-Size Toiletry Item</td>
                                    <td>Top Ramen</td>
                                    <td>Dry Beans</td>
                                </tr>
                                <tr>
                                    <td>Up to FOUR 1 point items</td>
                                    <td>Up to THREE 2 point items</td>
                                    <td>Up to THREE 3 point items</td>
                                </tr>
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
                            <li></li>
                            <li style="color: rgb(255,255,255);"><a href="https://www.csub.edu/privacy/">Privacy</a></li>
                            <li style="color: rgb(255,255,255);"><a href="https://policies.csub.edu/">Policies</a></li>
                            <li style="color: rgb(255,255,255);"><a href="https://www.csub.edu/equity-inclusion-compliance/ada">Accessibility</a></li>
                            <li style="color: rgb(255,255,255);"><a href="https://www.csub.edu/campusmap/">Maps</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <ul>
                            <li></li>
                            <li></li>
                            <li style="color: rgb(249,249,249);"><a href="https://www.csub.edu/bas/police/index.html">University Police</a></li>
                            <li style="color: rgb(255,255,255);"><a href="https://www.csub.edu/">University</a></li>
                            <li style="color: rgb(255,255,255);"><a href="https://www.csub.edu/bas/policy/CampusSafetyPlan.pdf">SAfety Plan</a></li>

                            <li style="color: rgb(255,255,255);"><a href="https://www.csub.edu/sustainability/foodpantry/FAQ_FoodPantry/index.html">FAQs</a></li>
			</ul>
                    </div>
                    <div class="col-1 col-sm-4 col-md-3 offset-md-0 item">
                        <ul></ul><small style="color: rgb(255,255,255);"><br/>California State University, Bakersfield 9001 Stockdale Highway Bakersfield, CA 93311 (661)-654-CSUB<br/></small>
                        <img class="img-fluid float-right" src="./assets/img/foodPantryLogo.jpg" width="100" height="100" style="margin: 5px;padding: 5px;"/>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
