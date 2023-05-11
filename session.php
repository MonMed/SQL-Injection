<?php
    include('config.php');

    $user_check = $_SESSION['login_user'];
    $id = $_SESSION['id'];

    // First Name Handling 
    $ses_sql = mysqli_query($db,"SELECT firstname FROM users WHERE username = '$user_check' ");
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $login_session_uname = $row['firstname'];  

    if(!isset($_SESSION['login_user'])){
      header("location: index.php");
      die();
    }
?>