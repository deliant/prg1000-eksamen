<?php
function selectFlyrute() {
  // Åpne filen flyrute.txt
  $fil = fopen("D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v11/flyrute.txt", "r") or die("<div class='alert alert-danger' role='alert'>Kan ikke åpne filen</div>");
  //$fil = fopen("data/flyrute.txt", "r") or die("<div class='alert alert-danger' role='alert'>Kan ikke åpne filen</div>");
  // Skriv data i flyrute.txt til en array og lag HTML select list
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      /* Finn match for søk */
      if($tekst[0] && $tekst[1]) {
        print("<option value=". $tekst[0] .";". $tekst[1] .">". $tekst[0] ." - ". $tekst[1] ."</option>");
      }
      else {
        print("<option value='Ingen'>Ingen flyruter funnet</option>");
      }
    }
  }
  // Lukk filen flyrute.txt
  fclose($fil);
}

function regFlygning($flightnr, $flyrute, $dato) {
  // Åpne filen flyning.txt
  $fil = fopen("D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v11/flygning.txt", "a") or die("<div class='alert alert-danger' role='alert'>Kan ikke åpne filen</div>");
  //$fil = fopen("data/flygning.txt", "a") or die("<div class='alert alert-danger' role='alert'>Kan ikke åpne filen</div>");
  // Skriv til filen flygning.txt
  fwrite($fil, "$flightnr;$flyrute;$dato\n");
  print("<div class='alert alert-success' role='alert'>Flygningen " . $flyrute . " (" . $flightnr . ") som utføres " . $dato . " registrert i flygningsdatabasen.</div>");
  // Lukk filen flygning.txt
  fclose($fil);
}
?>