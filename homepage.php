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
</head>
<title>Homepage</title>

<link rel="stylesheet" type="text/css" href="css/homepage.css">

<body>

  <header>
    <nav>
      </ul>
      <li><a id="uitloggen" href="uitloggen.php">Uitloggen</a></li>
      <li><a id="status" class="menu" href="homepage.php">Homepage</a></li>
      <li><a class="menu" href="Slidesshow Math mate/Presentation slideshow.html">Over ons</a></li>
      <li><a class="menu" href="rekenpagina1.php">Eenvoudige rekenpagina</a></li>
      <li><a class="menu" href="reeksen.php">Reeksen</a></li>
      <li><a class="menu" href="complex.php">Complexe rekenpagina</a></li>
      <li><a class="menu" href="#">Rad van foortuin</a></li>
      <li><a class="menu" href="#">Game pagina</a></li>
      </ul>
    </nav>
  </header>

       <img id="logo" src="foto's/logo.png" alt="logo">
        <h1>Welkom bij Math Mate!</h1> <img id="shitter" src="foto's/twitter icon.png" alt="twitter">
        <img id="fakebook" src="foto's/facebook icon.png" alt="facebook">
        <img id="gram" src="foto's/instagram icon.png" alt="instagram">

  <!-- hier komen de foto's en de uitleg van de calculators -->
  <main class="achtergrond"></main>
  <section class="container">
    <div id="blok1">
    <h3 class = "info-titel">Eenvoudige berekeningen</h3>
    <p class = "info-text">
    De eenvoudige rekenpagina is voor de simpelste berekeningen bedoelt.<br>
    Deze calculator laat de uitwerking van de berekeningen zien samen <br>
    met de uitkomst. de calculator kan de volgende berekeningen berekenen:
    </p><br><br>
    <ul id = "functies-calc">
    <li>Tafels berekenen</li>
    <li>Machtreeksen berekenen</li>
    <li>Breukenreeksen berekenen</li>
    <li>Kwadratenreeksen berekenen</li>
    </ul>
    <img id="plaatje-blok1" src="foto's/afb1.jpg" alt="plaatje rekenen">
    </div>
    <div id="blok2">
    
    </div>
    <div id="blok3">
    
    </div>
  </section>

</body>

</html>