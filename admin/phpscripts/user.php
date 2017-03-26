<?php
	function createUser($fname, $lname, $username, $password, $level) {
		require_once("connect.php");
		$ip = 0;
		$userstring = "INSERT INTO tbl_user VALUES(NULL,'{$fname}','{$lname}','{$username}','{$password}','{$level}',{$ip})";
		//echo $userstring;
		$userquery = mysqli_query($link, $userstring);
		if ($userquery) {
			redirect_to("admin_index.php");
		}else {
			$message = "Your hiring practices have failed you, we can not keep this individual";
			return $message;
		}





		mysqli_close($link);
	}


?>