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
    print("<span class='label label-success'>" Ruten  . $fraflyplass . " - "  . $tilflyplass . " registrert i flyrutedatabasen.</span>");
    // Lukk filen flyrute.txt
    fclose($fil);
  }
  else {
    print("<span class='label label-danger'>Mangler gyldig tekstfelt, vennligst fyll inn.</span>");
  }
}
?>