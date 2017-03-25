<?php 
	ini_set('display_errrors', 1);
	error_reporting(E_All);

	$ip = $_SERVER["REMOTE_ADDR"];
	//echo $ip;

	require_once("phpscripts/init.php");

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