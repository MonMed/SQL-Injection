<!DOCTYPE html>
<?php include("session.php");?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css">
        <title>Welcome</title>
    </head>
    <style>
        
    </style>
    <body>
        <navbar>
            <a id="home-btn" href="index.php" alt="home">
                <div class="bg_slider_r"></div>
                <img src="images/home.png" alt="">
            </a>
            <a id="logout-btn" href = "logout.php" alt="Log Out">
                <div class="bg_slider_l"></div>
                <img src="images/logout.png" alt="">
            </a>
        </navbar>
        <div class="wrapper">
            <h1 style="margin-top: 80px;">Hello <?php echo $login_session_uname; ?>, welcome to your account.</h1>
            <br>
        </div>
    </body>
</html>