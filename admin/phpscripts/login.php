<?php 
	function logIn($username, $password, $ip) {
		require_once("connect.php");
		$username = mysqli_real_escape_string($link,$username);
		$password = mysqli_real_escape_string($link,$password);
		$loginString = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass = '{$password}'";
		//echo $loginString;
		$user_set = mysqli_query($link, $loginString);

		if(mysqli_num_rows($user_set)) {
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			echo $found_user['user_fname'];

		}else{
			$message = "Username/Password was incorrect. You now have X chances to get it right....";
			return $message;
		}
		mysqli_close($link);
	}





 ?>

 