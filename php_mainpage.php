<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="miniProject.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">GreenCycle</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>

            

        </div> 
        <div class="content">
            <h1>Organic Waste <br><span>Management</span></h1>
            <p class="par">Proper organic waste management reduces greenhouse gas emissions and landfill use,<br>
                while converting waste into valuable resources like compost and biogas, <br>
                thus supporting environmental protection and generating economic opportunities.</p>

                <button class="cn"><a href="reg.php">JOIN US</a></button>

                <div class="form">
                    <?php include('errors.php'); ?> 
                    <h2>Login Here</h2>
                    <form method="post" action="miniProject.php">
                        <input type="username" name="username" placeholder="Enter username Here">
                        <input type="password" name="password" placeholder="Enter Password Here">
                        <button type="submit" class="btnn" name="login_user">Login</button>
                    </form>
                    <p class="link">Don't have an account?<br>
                        <a href="reg.php">Sign up here</a>
                    </p>
                </div>
        </div>

        <div class="maini">
            <div class="image-container">
                <a href="reg.php"><img src="seller.jpg" alt="Image 1" title="Seller"></a>
                <a href="reg.php"><img src="buyer.jpg" alt="Image 2" title="Buyer"></a>
                <a href="reg.php"><img src="guide.jpg" alt="Image 3" title="Guide"></a>
                <a href="reg.php"><img src="shop.webp" alt="Image 4" title="Shop"></a>
            </div>
        </div>
        

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>