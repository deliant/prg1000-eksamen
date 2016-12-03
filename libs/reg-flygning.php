<?php
function regFlygning($flightnr, $fraflyplass, $tilflyplass, $dato) {
  // Åpne filen flyning.txt
  $fil = fopen("data/flygning.txt", "a");
  // Skriv til filen flygning.txt
  fwrite($fil, "$flightnr;$fraflyplass;$tilflyplass;$dato\n");
  print("<div class='alert alert-success' role='alert'>Flygningen " . $fraflyplass . " - "  . $tilflyplass . " (" . $flightnr . ") som utføres " . $dato . " registrert i flygningsdatabasen.</div>");
  // Lukk filen flygning.txt
  fclose($fil);
}