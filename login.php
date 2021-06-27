<?php

// kijkt of de invulvelden correct ingevuld zijn en stuurt je door naar de homepage

$error = "";
if (isset($_POST['submit'])) {
    if (!empty($_POST['gebruikersnaam']) && !empty($_POST['wachtwoord'])) {

        require("database/database.php");

        $sql = "SELECT * FROM gebruikers WHERE username = '" . $_POST['gebruikersnaam'] . "'AND password = '" . $_POST['wachtwoord'] . "'";

        if ($result = $conn->query($sql)) {
            $rijen = $result->num_rows;
        } else {
            $error = "<h3>query failed</h3>";
        }

        if ($rijen == 1) {
            session_start();
            $_SESSION['ingelogd'] = true;
            header("Location: homepage.php");
        } else {
            $error = "<h3>Onjuiste gegevens</h3>";
        }
    } else {
        $error = "<h3>Vul uw gegevens in</h3>";
    }
}

?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Niels Bos">
    <meta name="keywords" content="">
    <title>Login pagina</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>

    <div id="container">

        <p id="title1">Inloggen</p>

        <!-- inlogvelden met eisen over het wachtwoord -->

        <?php echo $error; ?>

        <form method="post" action="login.php">
            <input class="records" type="text" name="gebruikersnaam" placeholder="Username" required><br>
            <input class="records" type="password" name="wachtwoord" placeholder="Password" required><br>
            <input id="login" type="submit" name="submit" value="Inloggen">
        </form>

        <img class="icons" id="fb" src="foto's/facebook icon.png" alt="facebook icon">
        <img class="icons" id="ig" src="foto's/instagram icon.png" alt="instagram icon">
        <img class="icons" id="tw" src="foto's/twitter icon.png" alt="twitter icon">
        <img id="logo" src="foto's/logo.png" alt="logo">

    </div>s

    <h1 id="naam"> Math Mate</h1>

</body>

</html>