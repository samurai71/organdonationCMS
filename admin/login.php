<?php 
  $pageTitle = "Login";
  //include "includes/admin_header.php";
  
  $ip = $_SERVER["REMOTE_ADDR"];

  require_once("phpscripts/init.php");

  function logIn($username, $password, $ip) {
    require_once("phpscripts/connect.php");
    $username = mysqli_real_escape_string($link,$username);
    $password = mysqli_real_escape_string($link,$password);
    $loginString = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass = '{$password}'";
    //echo $loginString;
    $user_set = mysqli_query($link, $loginString);

    if(mysqli_num_rows($user_set)) {
      $found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
      //echo $found_user['user_fname'];
      $id = $found_user['user_id'];
      $_SESSION['users_creds']= $id;
      $_SESSION['users_name']= $found_user['user_name'];
      if(mysqli_query($link, $loginString)){
        // $loginDate = date("Y-m-d H:i:s"); I was trying to get the date and time into the database
        // $updateString = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id={$id}" . "UPDATE tbl_user SET user_date='{$loginDate}' WHERE user_id={$id}"; I thought I could concantonate the query to have it add the date and time to the table 
        $updateString = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id={$id}";
        $updateQuery = mysqli_query($link, $updateString);

      }

      redirect_to("index.php");

    }else{
      $message = "You entered in the wrong Username or Password.";
      return $message;
    }
    mysqli_close($link);
  }



  if(isset($_POST['submit'])) {
    //echo "Congrats, you're a good clicker";
    $username = trim($_POST['username']); //trim is to take out any spaces from doing a copy and paste
    $password = trim($_POST['password']);

    if($username != "" && $password != "") {
      $result = logIn($username, $password, $ip);
      $message = $result;
      //echo "All Good!";
    }else {
      $message = "Please fill in the required fields";
    }
  }

 ?>
 <!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($pageTitle); ?> | Heart2Heart </title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
<h1 class="hide">Login to Heart2Heart Admin</h1>
 <div class="row banner">
 <div class="large-6 columns">
 <img src="images/logo.svg" alt="Heart2Heart Logo">
 </div>
 </div>

 <?php
    if(!empty($message)) {echo $message;}
  ?>
  
    <form id="loginForm" action="admin_login.php" method="post">
  <div class="row panel">
    <div class="large-offset-4 large-4 columns">
      <label>Username:
        <input type="text" name="username" placeholder="Please Enter your username">
      </label>
      <label>Password:
        <input type="password" name="password" placeholder="Please Enter your password">
      </label>
        <input id="submit" class="button round" name="submit" type="submit" value="Submit">
      <p><a href="#">Forgot password</a></p>
    </div>
  </div>
</form>

    
    

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
