<!DOCTYPE html>
<html>

<?php
    //include('../queries/update_inv.php');
    include('../skel/header.php');
    include('../skel/navbarUpdate.php');
?>

<body>
<form action="../queries/update_inv.php" method="post">
    <main class="page lanidng-page"></main>
    <section class="portfolio-block website gradient" style="background: url(&quot;./assets/img/gray.png&quot;);">
        <section>
                        <div class="container">
                <form id="application-form" style="background: url(&quot;./assets/img/white.jpg&quot;);color: #0c1975;">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <p><strong>Item ID</strong><input class="form-control" type="ID" name="prod-id" id="prodid"></p>
                            </div>
                            <div class="col">
                                <p><strong>Item Name</strong><input class="form-control" type="itemname" name="brand-name" id="bname"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p><strong>Quantity</strong><input class="form-control" type="quanti" name="quantity" id="quant"></p>
                    </div>
                    <div class="form-group">
                        <p><strong>Points Cost</strong><input class="form-control" type="pc" name="point-cost" id="pointc"></p>
                    </div>
                    <div class="form-group">
                        <p><strong>Expiration Date</strong><input class="form-control" type="ed" name="expiration-date" id="expire"></p>
                    </div>

                <br>
                <input type="submit" value="submit"  style="background: #ffc629;color: rgb(0,0,0);padding: 8px 20px;">                
                <br>
<br>
                </form>
            </div>
        </section>
    </section>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/Application-Form-1.js"></script>
    <script src="./assets/js/Application-Form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="./assets/js/theme.js"></script>

</body>

</html>
