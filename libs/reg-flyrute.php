<?php
function regFlyrute($fraflyplass, $tilflyplass) {
  // Åpne filen flyrute.txt
  $fil = fopen("data/flyrute.txt", "a");
  // Skriv til filen flyrute.txt
  fwrite($fil, "$fraflyplass;$tilflyplass\n");
  print("<div class='alert alert-success' role='alert'>Ruten " . $fraflyplass . " - "  . $tilflyplass . " registrert i flyrutedatabasen.</div>");
  // Lukk filen flyrute.txt
  fclose($fil);
}
?>