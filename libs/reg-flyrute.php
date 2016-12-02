<?php
function regFlyrute($fraflyplass, $tilflyplass) {
  // Sjekk at tekstfeltene har input
  if(!empty($fraflyplass) && !empty($tilflyplass)) {
    // Åpne filen flyrute.txt
    $fil = fopen("data/flyrute.txt", "a");
    // Skriv til filen flyrute.txt
    fwrite($fil, "$fraflyplass;$tilflyplass\n");
    print("<div class='alert alert-success' role='alert'>Ruten " . $fraflyplass . " - "  . $tilflyplass . " registrert i flyrutedatabasen.</div>");
    // Lukk filen flyrute.txt
    fclose($fil);
  }
  else {
    print("<div class='alert alert-danger' role='alert'>Mangler gyldig tekstfelt, vennligst fyll inn.</div>");
  }
}
?>