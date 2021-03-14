<!DOCTYPE html>
<html>

<?php
    include('skel/header.php');
    include('skel/navbarAdd.php');
?>

<body>
    <main class="page lanidng-page"></main>
    <section class="portfolio-block website gradient" style="background: url(&quot;./assets/img/gray.png&quot;);">
        <section>
                        <div class="container">
                <form id="application-form" style="background: url(&quot;./assets/img/white.jpg&quot;);color: #0c1975;">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <p><strong>Item ID</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="ID" required="" name="">
                            </div>
                            <div class="col">
                                <p><strong>Item Name</strong>&nbsp;<span class="text-danger">*</span></p><input class="form-control" type="name" required="" name="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p><strong>Quantity</strong><span class="text-danger">*</span></p><input class="form-control" type="quantity" name="" placeholder="">
                    </div>
                    <div class="form-group">
                        <p><strong>Points Cost</strong><span class="text-danger">*</span></p><input class="form-control" type="pc" required="" name="">
                    </div>
                    <div class="form-group">
                        <p><strong>Expiration Date</strong><span class="text-danger">*</span></p><input class="form-control" type="ed" required="" name="">
                    </div>

                <br>
                <span class="submit"><a class="submit" role="button" href="#" style="background: #ffc629;color: rgb(0,0,0);padding: 8px 20px;">ADD</a></span>
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
