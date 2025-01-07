<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="reg.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="main">
    <div class="form-container">
        <div class="form">
            <?php include('errors.php'); ?> 
            <h2>Register Here</h2>
            <form method="post" action="reg.php">
                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter Username Here" >
                <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Email Here" >
                <input type="password" name="password" placeholder="Enter Password Here" >
                <input type="password" name="confirm_password" placeholder="Confirm Password Here" >
                <button type="submit" class="btnn" name="reg_user">Register</button>
            </form>
            <p class="link">Already have an account?<br>
            <a href="miniProject.php">Login here</a></p>
        </div>
    </div>
</div>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
