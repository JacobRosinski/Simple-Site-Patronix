<?php

if(isset($_GET['returnMsgId'])==true){
	if($_GET['returnMsgId']==1){
		echo "<div style='text-align: center;'>Nieprawidłowe dane do logowania.</div>";
	}
}

?>

<!doctype html>
<html>
  <head>
    <title>Logowanie</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1>podaj login i haslo</h1>
    <form action="Main-Ctrl/index.php" method="post">
         </select>
      <br /><br />
      user:
	  <input type="text" name="user" />
	  haslo:
	  <input type="text" name="pass" /><br>
	  
      <input type="submit" name="login" />
      <input type="hidden" name="function" value="sign-in"/>
    </form>
  </body>
</html>