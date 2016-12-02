<?php
/**
 * Created by PhpStorm.
 * User: marius
 * Date: 10.11.16
 * Time: 11:18
 */
$klassekode = trim($_GET["klassekode"]);
// Sjekk at tekstfeltet har input
if(!empty($klassekode)) {
  // Åpne filen student.txt
  $fil = fopen("D:\\Sites\\home.hbv.no\\phptemp\\147828/student.txt", "r");
  // Skriv data i student.txt til en array og lag HTML table
  print("<table width='100%'>");
  print("<tr><td><strong>Brukernavn</strong></td><td><strong>Fornavn</strong></td><td><strong>Etternavn</strong></td><td><strong>Klassekode</strong></td></tr>");
  while ($tekstlinje = fgets($fil)) {
    if ($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      foreach ($tekst as $array) {
        if (stripos($klassekode, $array) !== FALSE) {
          print("<tr><td>$tekst[0]</td><td>$tekst[1]</td><td>$tekst[2]</td><td>$tekst[3]</td></tr>");
        }
      }
    }
  }
  print("</table>");
  // Lukk filen klasse.txt
  fclose($fil);
}
?>