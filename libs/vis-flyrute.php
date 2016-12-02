<?php
function visFlyrute() {
  // Åpne filen flyrute.txt
  $fil = fopen("data/flyrute.txt", "r");
  // Skriv data i flyrute.txt til en array og lag HTML table
  print("<tr><td><strong>Fra flyplass</strong></td><td><strong>Til flyplass</strong></td></tr>");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      print("<tr><td>$tekst[0]</td><td>$tekst[1]</td></tr>");
    }
  }
  // Lukk filen flyrute.txt
  fclose($fil);
}
?>