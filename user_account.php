<!DOCTYPE html>
<?php include("session.php");?>
<head>
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }
  
  navbar {
    padding: 10px;
    display: flex;
    justify-content: flex-end;
  }
  
  #logout-btn {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #fff;
  }
  
  #logout-btn img {
    height: 20px;
    width: 20px;
    margin-left: 10px;
  }
  
   .wrapper {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
  }
  
  h1 {
    font-size: 30px;
  }       
</style>
</head>
<body>
        <navbar>
            <a id="logout-btn" href = "logout.jpg" alt="Log Out">
                <img src="images/logout.jpg" alt="">
            </a>
        </navbar>
        <div class="wrapper">
            <h2 style="margin-top: 80px;">Hello <?php echo $login_session_uname; ?>, welcome to your bank account.</h2>
            <br>
        </div>
</body>
</html>