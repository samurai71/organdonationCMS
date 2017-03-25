<?php 
	ini_set('display_errrors', 1);
	error_reporting(E_All);
	require_once('phpscripts/init.php');
	//confirm_logged_in();


 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome to your Admin Panel</title>
</head>
<body>
	<h1>Welcome to <?php //echo $_SESSION['users_name']; ?> to the admin panel</h1>
	<a href="admin_createuser.php">Create new User</a>
	<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
</body>
</html>