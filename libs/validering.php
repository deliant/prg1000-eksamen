<?php
function validerFlyplasskode($flyplasskode) {
  $lovligFlyplasskode = true;

  // Sjekk at flyplasskode er unik
  $fil = fopen("data/flygning.txt", "r");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      if($tekst[0] == $flyplasskode) {
        $lovligFlyplasskode = false;
      }
    }
  }
  fclose($fil);
  // Sjekk at form er fyllt ut
  if(!$flyplasskode) {
    $lovligFlyplasskode = false;
  }
  // Sjekk at flyplasskode er 3 bokstaver
  else if(strlen($flyplasskode) != 3) {
    $lovligFlyplasskode = false;
  }
  // Sjekk at flyplasskode ikke inneholder nummer
  else if(is_numeric($flyplasskode)) {
    $lovligFlyplasskode = false;
  }
  // Sjekk at flyplasskode kun innholder bokstaver a-z
  else {
    $tegn1 = substr($flyplasskode,0,1);
    $tegn2 = substr($flyplasskode,1,1);
    $tegn3 = substr($flyplasskode,2,1);

    if ($tegn1 < "a" || $tegn1 > "z" || $tegn2 < "a" || $tegn2 > "z" || $tegn3 < "a" || $tegn3 > "z") {
      $lovligFlyplasskode = false;
    }
  }

  return $lovligFlyplasskode;
}
?>