<?php
function visFlyrute() {
  // Åpne filen flyrute.txt
  $fil = fopen("D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v11/flyrute.txt", "r") or die("<div class='alert alert-danger' role='alert'>Kan ikke åpne filen</div>");
  // Skriv data i flyrute.txt til en array og lag HTML table
  print("<tr><th>Fra flyplass</th><th>Til flyplass</th></tr>");
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