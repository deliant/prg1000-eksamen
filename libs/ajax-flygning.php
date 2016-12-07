<?php
$flyrute = trim($_GET["flyrute"]);
// Åpne filen flygning.txt
$fil = fopen("D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v11/flygning.txt", "r") or die("<div class='alert alert-danger' role='alert'>Kan ikke åpne filen</div>");
// Skriv data i flygning.txt til en array og lag HTML table
print("<table width='100%'>");
print("<tr><th>Flightnr</th><th>Fra flyplass</th><th>Til flyplass</th><th>Dato</th></tr>");
while ($tekstlinje = fgets($fil)) {
  if ($tekstlinje != "") {
    $tekst = explode(';', $tekstlinje);
    $rute = explode(';', $flyrute);
    $tekst = array_map('trim', $tekst);
    if($rute[0] == $tekst[1] && $rute[1] == $tekst[2]) {
      foreach ($tekst as $array) {
        if(stripos($flyrute, $array) !== FALSE) {
          print("<tr><td>$tekst[0]</td><td>$tekst[1]</td><td>$tekst[2]</td><td>$tekst[3]</td></tr>");
        }
      }
    }
  }
}
print("</table>");
// Lukk filen klasse.txt
fclose($fil);
?>