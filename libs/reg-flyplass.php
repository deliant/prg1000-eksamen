<?php
function regFlyplass($flyplasskode, $flyplassnavn) {
  // Åpne filen flyplass.txt
  $fil = fopen("D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v11/flyplass.txt", "a") or die("<div class='alert alert-danger' role='alert'>Kan ikke åpne filen</div>");
  // Skriv til filen flyplass.txt
  fwrite($fil, "$flyplasskode;$flyplassnavn\n");
  print("<div class='alert alert-success' role='alert'>" .$flyplassnavn. " registrert i flyplassdatabasen.</div>");
  // Lukk filen flyplass.txt
  fclose($fil);
}
?>