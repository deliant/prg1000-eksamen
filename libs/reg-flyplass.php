<?php
$flyplasskode = trim($_POST["flyplasskode"]);
$flyplassnavn = trim($_POST["flyplassnavn"]);
function regFlyplass($flyplasskode, $flyplassnavn) {
  // Sjekk at tekstfeltene har input
  if(!empty($flyplasskode) && !empty($flyplassnavn)) {
    // Åpne filen flyplass.txt
    $fil = fopen("data/flyplass.txt", "a");
    // Skriv til filen flyplass.txt
    fwrite($fil, "$flyplasskode;$flyplassnavn\n");
    print("<div id='melding'>" .$flyplassnavn. " registrert i flyplassdatabasen.</div>");
    // Lukk filen flyplass.txt
    fclose($fil);
  }
  else {
    print("<div id='melding'>Mangler gyldig tekstfelt, vennligst fyll inn.</div>");
  }
}
?>