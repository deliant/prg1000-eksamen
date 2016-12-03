<?php
function visAnkomst() {
  // Åpne filen flygning.txt
  $fil = fopen("data/flygning.txt", "r");
  // Skriv data i flygning.txt til en array og lag HTML table
  print("<tr><th>Flightnr</th><th>Fra flyplass</th><th>Til flyplass</th><th>Dato</th></tr>");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      /* Ikke ferdig */
      if(in_array($flyplasskode, $tekst)) {
        if($tekst[2] == $flyplasskode) {
          print("<tr><td>$tekst[0]</td><td>$tekst[1]</td><td>$tekst[2]</td><td>$tekst[3]</td></tr>");
        }
      }
    }
  }
  // Lukk filen flygning.txt
  fclose($fil);
}
?>