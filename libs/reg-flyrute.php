<?php
$fraflyplass = trim($_POST["fraflyplass"]);
$tilflyplass = trim($_POST["tilflyplass"]);
function regFlyrute($fraflyplass, $tilflyplass) {
  // Sjekk at tekstfeltene har input
  if(!empty($fraflyplass) && !empty($tilflyplass)) {
    // Åpne filen flyrute.txt
    $fil = fopen("data/flyrute.txt", "a");
    // Skriv til filen flyrute.txt
    fwrite($fil, "$fraflyplass;$tilflyplass\n");
    print("<div id='melding'>" Ruten  . $fraflyplass . " - "  . $tilflyplass . " registrert i flyrutedatabasen.</div>");
    // Lukk filen flyrute.txt
    fclose($fil);
  }
  else {
    print("<div id='melding'>Mangler gyldig tekstfelt, vennligst fyll inn.</div>");
  }
}
?>