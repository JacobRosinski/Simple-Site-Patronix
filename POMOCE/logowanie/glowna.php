<?php

if(isset($_GET['returnMsgId'])==true){
	if($_GET['returnMsgId']==2){
		echo "<div style='text-align: center;'>Wylogowano pomyslnie.</div>";
	}
}

			session_start();
			if(isset($_SESSION['user_name'])==true){
				echo "Zalogowany u¿ytkownik: " . $_SESSION['user_name'];
				echo "<a href='Main-Ctrl/index.php?function=sign-out&src=glowna.php'>Wyloguj</a>";
			}else{
				echo "Niezalogowany uzytkownik";
				echo "<a href='index.php'>Zaloguj</a>";
			}

?>

<!doctype html>
<html>
  <head>
    <title>Strona g³ówna</title>
    <meta charset="utf-8" />
  </head>
  <body>
	</body>
</html>