<?php 
	session_start();

	$ID = $_REQUEST['ID'];
	$password = $_POST['password'];
	$confirn = $_POST['confirm'];
	$fname = $_POST['fname'];
	
	
	
	

	     if($username == null || $password == null || $email == null){
		  echo "null username/password/email";
	         }else{

		$user = $ID."|".$Name."|".$password."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
	    if($fname == 'create'){
			 header('location: home.php');
		}
		else{
			header('location: login.html');
		}

	}

	

?>