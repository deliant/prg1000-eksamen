<?php
function visAnkomstg() {
  // Åpne filen flygning.txt
  $fil = fopen("data/flygning.txt", "r");
  // Skriv data i flygning.txt til en array og lag HTML table
  print("<table width='100%'>");
  print("<tr><td><strong>Flightnr</strong></td><td><strong>Fra flyplass</strong></td><td><strong>Til flyplass</strong></td><td><strong>Dato</strong></td></tr>");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      /* Ikke ferdig */
      if(in_array($flyplassnavn, $tekst)) {
        print("<tr><td>$tekst[0]</td><td>$tekst[1]</td><<td>$tekst[2]</td><<td>$tekst[3]</td></tr>");
      }
    }
  }
  print("</table>");
  // Lukk filen flygning.txt
  fclose($fil);
}
?>