<?php
function regFlyplass($flyplasskode, $flyplassnavn) {
  // Åpne filen flyplass.txt
  $fil = fopen("data/flyplass.txt", "a");
  // Skriv til filen flyplass.txt
  fwrite($fil, "$flyplasskode;$flyplassnavn\n");
  print("<div class='alert alert-success' role='alert'>" .$flyplassnavn. " registrert i flyplassdatabasen.</div>");
  // Lukk filen flyplass.txt
  fclose($fil);
}
?>