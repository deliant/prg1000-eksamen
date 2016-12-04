<?php
$flyplasskode = trim($_GET["flyplasskode"]);
// Åpne filen flyrute.txt
$fil = fopen("../data/flyrute.txt", "r");
// Skriv data i flyrute.txt til en array og lag HTML table
print("<table width='100%'>");
print("<tr><th>Fra flyplass</th><th>Til flyplass</th></tr>");
while ($tekstlinje = fgets($fil)) {
  if ($tekstlinje != "") {
    $tekst = explode(';', $tekstlinje);
    $tekst = array_map('trim', $tekst);
    if($tekst[0] == $flyplasskode) {
      foreach ($tekst as $array) {
        if(stripos($flyplasskode, $array) !== FALSE) {
          print("<tr><td>$tekst[0]</td><td>$tekst[1]</td></tr>");
        }
      }
    }
  }
}
print("</table>");
// Lukk filen klasse.txt
fclose($fil);
?>