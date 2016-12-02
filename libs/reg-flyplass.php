<?php
function regFlyplass($flyplasskode, $flyplassnavn) {
  // Sjekk at tekstfeltene har input
  if(!empty($flyplasskode) && !empty($flyplassnavn)) {
    // Åpne filen flyplass.txt
    $fil = fopen("data/flyplass.txt", "a");
    // Skriv til filen flyplass.txt
    fwrite($fil, "$flyplasskode;$flyplassnavn\n");
    print("<div class='alert alert-success' role='alert'>" .$flyplassnavn. " registrert i flyplassdatabasen.</div>");
    // Lukk filen flyplass.txt
    fclose($fil);
  }
  else {
    print("<div class='alert alert-danger' role='alert'>Mangler gyldig tekstfelt, vennligst fyll inn.</div>");
  }
}
?>