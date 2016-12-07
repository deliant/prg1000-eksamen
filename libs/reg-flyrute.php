<?php
function selectFlyplass() {
  // Åpne filen flyplass.txt
  $fil = fopen("D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v11/flyplass.txt", "r") or die("<div class='alert alert-danger' role='alert'>Kan ikke åpne filen</div>");
  // Skriv data i flyplass.txt til en array og lag HTML select list
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      /* Finn match for søk */
      if($tekst[0] && $tekst[1]) {
        print("<option value=". $tekst[0] .">". $tekst[0] ." - ". $tekst[1] ."</option>");
      }
      else {
        print("<option value='Ingen'>Ingen flyplasser funnet</option>");
      }
    }
  }
  // Lukk filen flyplass.txt
  fclose($fil);
}

function regFlyrute($fraflyplass, $tilflyplass) {
  // Åpne filen flyrute.txt
  $fil = fopen("D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v11/flyrute.txt", "a") or die("<div class='alert alert-danger' role='alert'>Kan ikke åpne filen</div>");
  // Skriv til filen flyrute.txt
  fwrite($fil, "$fraflyplass;$tilflyplass\n");
  print("<div class='alert alert-success' role='alert'>Ruten " . $fraflyplass . " - "  . $tilflyplass . " registrert i flyrutedatabasen.</div>");
  // Lukk filen flyrute.txt
  fclose($fil);
}
?>