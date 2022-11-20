<?php

function getUserCode($file){
	$data = file_get_contents("./" . $file);
	$data = str_replace("\n", "", $data);
	$data = str_replace("\r", "", $data);
	return $data;
}

if(isset($_POST['function'])==true){
	if($_POST['function']=="sign-in"){
		/* Funkcja: sign-in */
		$user = $_POST['user'];
		/* User: Admin */
		if($_POST['pass']==getUserCode($user . ".txt")){
			session_start();
			$_SESSION['user_name']="Admin";
			if(isset($_GET['src'])==true){
				header("Location: ../index.php");
			}else{
				header("Location: ../glowna.php");
			}
			exit;
		}else if($_POST['pass']==getUserCode($user . ".txt")){
			/* User: Author */
			session_start();
			$_SESSION['user_name']="Author";
			header("Location: ../index.php");
			exit;
		}else{
			$params = "?returnMsgId=1";
			
			if(isset($_GET['src'])==true){
				$params = $params . "&src=" . $_GET['src'];
			}
			
			header("Location: ../index.php" . $params);
			exit;
		}
	}
}
	
if(isset($_GET['function'])==true){
	if($_GET['function']=="sign-out"){
		/* Funkcja: sign-out */
		session_start();
		
		$_SESSION = array();
		unset($_SESSION);
		
		if (isset($_COOKIE[session_name()])) { 
			 setcookie(session_name(), '', time()-42000, '/'); 
		}
		
		session_destroy();
		
		if(isset($_GET['src'])==true){
			$params = $params . "&src=" . $_GET['src'];
		}
		
		header("Location: ../" . $_GET['src'] . "?returnMsgId=2");
		exit;
	}else{
		/* Unknown function controler! */
		header("Location: ../index.php?returnMsgId=3");
		exit;
	}
}

?>