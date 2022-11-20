<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="users.css">
</head>
<body>

    <div id="profil">
        <div id="dane">
            <h1>
                PROFIL
            </h1>
        </div>
        <div id="kategorie">
            <a href="#" class="myButton">PROFIL</a>
            <a href="#" class="myButton">ZLECENIA</a>
        </div>
        <div id="dane_p">
            <h2>
                Witaj <span></span>
            </h2>
            <table>
                <tr>
                    <td>
                        MAIL
                    </td>
                    <td>
                        <input type="text" value="<?php echo $_SESSION["user_name"] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        HASŁO
                    </td>
                    <td>
                        <input type="password" value="<?php echo $_SESSION["haslo"] ?>">
                    </td>
                </tr>
            </table>
            <h2>
                Twoje dane
            </h2>
            <table>
                <tr>
                    <td>
                        IMIE
                    </td>
                    <td>
                        <input type="text" value="<?php echo $_SESSION["imie"] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        NAZWISKO
                    </td>
                    <td>
                        <input type="text" value="<?php echo $_SESSION["nazwisko"] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        ADRES
                    </td>
                    <td>
                        <input type="text" value="<?php echo $_SESSION["adres"] ?>">
                    </td>
                </tr>
            </table>
            <input type="submit" class="myButton" value="ZAKTUALIZUJ">
        </div>
    </div>

   
</body>
</html>