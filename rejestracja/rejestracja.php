<?php
    $mail = $_POST[""];
    $haslo = $_POST[""];
    $nazwisko = $_POST[""];
    $imie = $_POST[""];
    $adres = $_POST[""];

    $conn = mysqli_connect("localhost","root","","baza");
    $sql = "INSERT INTO uzytkownicy(mail, haslo) VALUES ('$mail','$haslo'); INSERT INTO dane_uzytkownika(mail, naziwsko, imie, adres) VALUES('$mail',NULL,NULL,NULL);";

    echo "Dane zostały wysłane";

    $conn->close()

?>