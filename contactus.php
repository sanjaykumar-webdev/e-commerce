<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    <title>Contact | E-store</title>
</head>
<body>
  <!-- Header -->
  <?php
            include 'header.php';
        ?>
    <!-- Header End -->

    <!-- Main -->
        <div class="content">
          <div class="container">
            
          <div class="row">
              <div class="col-md-8">
                <h2 class="p-bold">Live Support</h2>
                <div class="box-padding-10">
                <h3>24 Hours | 7 Days a Week | 365 Days a Year - Live Technical Support</h3>
                <p>It is a long established fact that a reader will be distacted by the readable content of a page when  looking at its layout.
				The point of using lorem Ipusum is that it has a more or less normal distribution of letters.
				There are many variations of passages of lorem ipusum available, nut the majority jave suffered alteration in some form, 
				by injected humour or randomised words which don't look even slightly believable.
				if you are going to use a passage of lorem ipsum, you need to be sure there isn't anything embarrasing hidden in the middle of text</p>
              </div>
              </div>

              <div class="col-md-4">
                <img src="img/cc.svg" class="img-responsive live-support-img" alt="Live Support">
              </div>
            </div>

            <div class="row">
              <div class="col-md-7">
              <h2 class="p-bold">Contact Us</h2>
              <div class="box-padding-10">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" cols="85" class="form-control" rows="10"></textarea>
                </div>
                <input type="submit" class="btn btn-info" value="Submit">
              </form>
			  <br>
              </div>
              </div>
              <div class="col-md-5">
                <div class="box-padding-rl">
                  <h2 class="p-bold">Contact Information</h2>
                  <p>500, Kanchan Park Lorem, ipsum dolor sit amet consectetur,</p>
                  <p>12-568-875 Lorem ipsum dolor sit,</p>
                  <p>USA</p>
                  <p>Phone : +91-1230000000</p>
				  <p>FAX: (000) 00 00 000</p>
                  <p>Email : products@onlineshopping.com</p>
                  <p>Follow On: <span class="glyphicon glyphicon-thumbs-up"></span> Facebook, twitter <a href="#"><i class="fa fa-instagram"></i></a> <a href="#"><i class="fa fa-facebook-square"></a></i></p>                  
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Main End -->

    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>
    <!-- Footer End -->  
</body>
</html>