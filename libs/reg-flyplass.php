<?php
function regFlyplass($flyplasskode, $flyplassnavn) {
  // Åpne filen flyplass.txt
  $fil = fopen("D:\\Sites\\home.hbv.no\\phptemp\\web-prb10v11/flyplass.txt", "a");
  // Skriv til filen flyplass.txt
  fwrite($fil, "$flyplasskode;$flyplassnavn\n");
  print("<div class='alert alert-success' role='alert'>" .$flyplassnavn. " registrert i flyplassdatabasen.</div>");
  // Lukk filen flyplass.txt
  fclose($fil);
}
?>