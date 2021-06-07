<?php

session_start();
if ($_SESSION['ingelogd'] != true) {
  header("Location: login.php");
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
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/rekenpagina1.css">
</head>

<body>

    <header>
        <nav>
            </ul>
            <li><a id="uitloggen" href="uitloggen.php">Uitloggen</a></li>
            <li><a class="menu" href="homepage.php">Homepage</a></li>
            <li><a class="menu" href="#">Over ons</a></li>
            <li><a class="menu" href="rekenpagina1.php">Eenvoudige rekenpagina</a></li>
            <li><a class="menu" href="#">Reeksen</a></li>
            <li><a class="menu" href="#">Complexe rekenpagina</a></li>
            <li><a class="menu" href="#">Rad van foortuin</a></li>
            <li><a class="menu" href="#">Game pagina</a></li>
            </ul>
        </nav>
    </header>

    <section class="container">
        <h1>Math Mate</h1>
        <form>
            <select id="mySelect">
                <option id="opTafel" value="Tafels" onclick="displayShow()">Tafels</option>
                <option value="Machtreeks" onclick="displayHide1()">Machtreeks</option>
                <option value="Breukenreeks" onclick="displayHide2()">Breukenreeks</option>
                <option value="Kwadratenreeks" onclick="displayHide3()">Kwadratenreeks</option>
            </select>
            <img class="kwadraat" id="helpQm4" src="foto's/vraagteken.png" alt="vraagteken">
            <img class="macht" id="helpQm2" src="foto's/vraagteken.png" alt="vraagteken">
            <img class="breuk" id="helpQm3" src="foto's/vraagteken.png" alt="vraagteken">
            <img class="tafel" id="helpQm1" src="foto's/vraagteken.png" alt="vraagteken">

            <input id="opGetal1" type="text" name="getal1" placeholder="Vul in">
            <input id="opGetal2" type="text" name="getal2" placeholder="Vul in">
            <button id="bereken" type="button" onclick="calcAns()">Calculate</button>
            <button id="reset" type="reset" onclick="displayShow()">Reset</button>
        </form>
        <div class="test">
            <p>fakka broerneef</p>
        </div>
        <div id="SomAntwoorden"></div>
        <footer></footer>
        
    </section>
    <script  type="text/javascript" src="javascript/reken1.js"></script>
</body>
</html>