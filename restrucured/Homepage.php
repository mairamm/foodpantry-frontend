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
</body>

<?php
    include('skel/footer.php');
?>

</html>
