<?php
        include 'login.php';
		?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Online Shopping</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    ?>
                    <?php
                } else {
                    ?>
		            <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href="contactus.php"><span class=" glyphicon glyphicon-phone"></span> Contact Us</a></li>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#" button type="button" class="btn" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>
