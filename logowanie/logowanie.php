<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projekt</title>
        <link rel="stylesheet" href="styl-logowanie.css">
    </head>
    <body>
        <div id="rejestracja">
		<?php
			if(isset($_POST['function'])==true){
				if($_POST['function']=="sign-in"){
					/* Funkcja: sign-in */
					$conn = mysqli_connect("localhost","root","","baza");
					$user = $_POST['mail'];
					$pass = $_POST['password'];
					$sql = "SELECT uzytkownicy.haslo , dane_uzytkownika.imie, dane_uzytkownika.nazwisko, dane_uzytkownika.adres FROM uzytkownicy INNER JOIN dane_uzytkownika ON uzytkownicy.mail=dane_uzytkownika.mail WHERE uzytkownicy.mail LIKE '$user'";
					$result = $conn->query($sql);
					if($result->num_rows == 1)
					{
						$check_pass = $result->fetch_assoc();
					
						/* User: Admin */
						if($pass==$check_pass["haslo"]){
							session_start();
							$_SESSION['user_name']=$user;
							$_SESSION['haslo']=$check_pass["haslo"];
							$_SESSION['imie']=$check_pass["imie"];
							$_SESSION['nazwisko']=$check_pass["nazwisko"];
							$_SESSION['adres']=$check_pass["adres"];
							echo "<h1>Witaj ".$_SESSION['imie']." ".$_SESSION["nazwisko"]."</h1>";
							sleep(5);
							header("Location: ../users/index.php");
							exit;
						}
					}
					else
					{
						echo "<h1>Nie znaleziono</h1>";
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
		</div>
    </body>
</html>