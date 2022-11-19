<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projekt</title>
        <link rel="stylesheet" href="rejestracja.css">
    </head>
    <body>
        <div id="rejestracja">
            <?php
                $mail = $_POST["mail"];
                $haslo = $_POST["password"];
                $nazwisko = $_POST["nazwisko"];
                $imie = $_POST["imie"];
                $adres = $_POST["adres"];

                $conn = mysqli_connect("localhost","root","","baza");
                $sql = "INSERT INTO uzytkownicy(mail, haslo) VALUES ('$mail','$haslo');";
                $sql2 = "INSERT INTO dane_uzytkownika(mail, nazwisko, imie, adres) VALUES('$mail','$nazwisko','$imie','$adres');";
                $conn->query($sql);
                $conn->query($sql2);

                echo "<h1>DANE ZOSTAŁY WYSŁANE</h1>";

                $conn->close()
            ?>
        </div>
    </body>
</html>