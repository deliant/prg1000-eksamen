<?php
function visFlyplass() {
  // Åpne filen flyplass.txt
  $fil = fopen("data/flyplass.txt", "r");
  // Skriv data i flyplass.txt til en array og lag HTML table
  print("<table width='100%'>");
  print("<tr><td><strong>Flyplasskode</strong></td><td><strong>Flyplassnavn</strong></td></tr>");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      print("<tr><td>$tekst[0]</td><td>$tekst[1]</td></tr>");
    }
  }
  print("</table>");
  // Lukk filen flyplass.txt
  fclose($fil);
}
?>