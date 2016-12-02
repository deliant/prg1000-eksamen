<?php
$flightnr = trim($_POST["flightnr"]);
$fraflyplass = trim($_POST["fraflyplass"]);
$tilflyplass = trim($_POST["tilflyplass"]);
$dato = trim($_POST["dato"]);
function regFlygning($flightnr, $fraflyplass, $tilflyplass, $dato) {
  // Sjekk at tekstfeltene har input
  if(!empty($flightnr) &&!empty($fraflyplass) && !empty($tilflyplass) && !empty($dato)) {
    // Åpne filen flyning.txt
    $fil = fopen("data/flygning.txt", "a");
    // Skriv til filen flygning.txt
    fwrite($fil, "$flightnr;$fraflyplass;$tilflyplass;$dato\n");
    print("<div class='alert alert-success' role='alert'>" Flygningen  . $fraflyplass . " - "  . $tilflyplass . " (" . $flightnr . ") som utføres " . $dato . " registrert i flygningsdatabasen.</div>");
    // Lukk filen flygning.txt
    fclose($fil);
  }
  else {
    print("<div class='alert alert-danger' role='alert'>Mangler gyldig tekstfelt, vennligst fyll inn.</div>");
  }
}