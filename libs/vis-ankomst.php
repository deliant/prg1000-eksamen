<?php
function selectAnkomst() {
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
        print("<option value='-'>Ingen flyplasser funnet</option>");
      }
    }
  }
  // Lukk filen flyplass.txt
  fclose($fil);
}

function visAnkomst() {
  $flyplasskode = trim($_POST["flyplasskode"]);
  // Åpne filen flygning.txt
  $fil = fopen("D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v11/flygning.txt", "r");
  // Skriv data i flygning.txt til en array og lag HTML table
  print("<tr><th>Flightnr</th><th>Fra flyplass</th><th>Til flyplass</th><th>Dato</th></tr>");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      /* Finn match for søk */
      if($tekst[2] == $flyplasskode) {
        print("<tr><td>$tekst[0]</td><td>$tekst[1]</td><td>$tekst[2]</td><td>$tekst[3]</td></tr>");
      }
    }
  }
  // Lukk filen flygning.txt
  fclose($fil);
}
?>