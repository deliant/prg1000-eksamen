<?php
function visFlyplass() {
  // Åpne filen flyplass.txt
  $fil = fopen("D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v11/flyplass.txt", "r") or die("<div class='alert alert-danger' role='alert'>Kan ikke åpne filen</div>");
  // Skriv data i flyplass.txt til en array og lag HTML table
  print("<tr><th>Flyplasskode</th><th>Flyplassnavn</th></tr>");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      print("<tr><td>$tekst[0]</td><td>$tekst[1]</td></tr>");
    }
  }
  // Lukk filen flyplass.txt
  fclose($fil);
}
?>