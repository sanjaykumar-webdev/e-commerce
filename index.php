<?php
require('common.php');

// Redirects the user to home page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location:home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to E-store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style="padding-top: 30px;">
        <!-- Header -->
		<?php
        include 'header.php';
		?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell Guaranty products.</h1>
                            <p>Flat 20% OFF on premium brands </p>
                            <br/>
                            <a  href="home.php" class="btn btn-warning btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->
			
			       <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.html" >
                            <div class="thumbnail">
                                <img src="img/i5.jpg" alt="">
                                <div class="caption">
                                    <h3>Mobile Phones</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.html" >
                            <div class="thumbnail">
                                <img src="img/21.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.html" >
                            <div class="thumbnail">
                                <img src="img/22.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        <!--Footer-->
        <?php
        include 'footer.php';
		?>
        <!--Footer end-->

    </body> 
</html>