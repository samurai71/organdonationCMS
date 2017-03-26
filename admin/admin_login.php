<?php 
	// ini_set('display_errrors', 1);
	// error_reporting(E_All);

	$ip = $_SERVER["REMOTE_ADDR"];
	//echo $ip;

	require_once("includes/init.php");

	function logIn($username, $password, $ip) {
	  require_once("includes/connect.php");
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
 <html>
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 </head>
 <body>
 <h1>CMS Login</h1>
 <?php
 		if(!empty($message)) {echo $message;}
  ?>
 <form action="admin_login.php" method="post">
 	<label>Username:</label>
 	<input type="text" name="username" value="">
 	<label>Password:</label>
 	<input type="password" name="password" value=""><a href="">
 	<input type="submit" name="submit" value="Go!">
 </form>
 </body>
 </html>