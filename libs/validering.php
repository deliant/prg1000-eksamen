<?php
function validerFlyplass($flyplasskode, $flyplassnavn) {
  $lovligFlyplass = true;
  // Sjekk at form er fyllt ut
  if(!$flyplasskode || !$flyplassnavn) {
    $lovligFlyplass = false;
  }
  // Sjekk at flyplasskode er 3 bokstaver
  else if(strlen($flyplasskode) != 3) {
    $lovligFlyplass = false;
  }
  // Sjekk at flyplasskode ikke inneholder nummer
  else if(is_numeric($flyplasskode)) {
    $lovligFlyplass = false;
  }
  // Sjekk at flyplasskode kun innholder bokstaver a-z
  else {
    $tegn1 = substr($flyplasskode,0,1);
    $tegn2 = substr($flyplasskode,1,1);
    $tegn3 = substr($flyplasskode,2,1);
    if ($tegn1 < "a" || $tegn1 > "z" || $tegn2 < "a" || $tegn2 > "z" || $tegn3 < "a" || $tegn3 > "z") {
      $lovligFlyplass = false;
    }
  }
  // Sjekk at flyplasskode er unik
  $fil = fopen("data/flygning.txt", "r");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      if($tekst[0] == $flyplasskode) {
        $lovligFlyplass = false;
      }
    }
  }
  fclose($fil);
  // Returner verdi for valideringen
  return $lovligFlyplass;
}

function validerFlyrute($fraflyplass, $tilflyplass) {
  $lovligFlyrute = true;
  // Sjekk at form er fyllt ut
  if(!$fraflyplass || !$tilflyplass) {
    $lovligFlyrute = false;
  }
  // Sjekk at kombinasjonen fraflyplass og tilflyplass er unik
  $fil = fopen("data/flyrute.txt", "r");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      if($tekst[0] == $fraflyplass) {
        $lovligFlyrute = false;
      }
      if($tekst[1] == $tilflyplass) {
        $lovligFlyrute = false;
      }
    }
  }
  fclose($fil);
  // Sjekk at flyplasskode for fraflyplass og tilflyplass er registrert i FLYPLASS.TXT
  $fil = fopen("data/flyplass.txt", "r");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      if($tekst[0] != $fraflyplass) {
        $lovligFlyrute = false;
      }
      if($tekst[0] != $tilflyplass) {
        $lovligFlyrute = false;
      }
    }
  }
  fclose($fil);
  // Returner verdi for valideringen
  return $lovligFlyrute;
}

function validerFlygning($flightnr, $fraflyplass, $tilflyplass, $dato) {
  $lovligFlygning = true;
  // Sjekk at form er fyllt ut
  if(!$flightnr || !$fraflyplass || !$tilflyplass || !$dato) {
    $lovligFlygning = false;
  }
  // Sjekk at flightnr er unik
  $fil = fopen("data/flygning.txt", "r");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      if($tekst[0] == $flightnr) {
        $lovligFlygning = false;
      }
    }
  }
  fclose($fil);
  // Sjekk at kombinasjonen fraflyplass og tilflyplass er registrert i FLYRUTE.TXT
  $fil = fopen("data/flyrute.txt", "r");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      if($tekst[0] != $fraflyplass || $tekst[1] != $tilflyplass) {
        $lovligFlygning = false;
      }
    }
  }
  fclose($fil);
  // Returner verdi for valideringen
  return $lovligFlygning;
}
?>