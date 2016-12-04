<?php
function validerFlyplassFormat($flyplasskode) {
  $lovligFlyplassFormat = true;
  // Sjekk at flyplasskode er 3 bokstaver
  if(strlen($flyplasskode) != 3) {
    $lovligFlyplassFormat = false;
  }
  // Sjekk at flyplasskode ikke inneholder nummer
  else if(is_numeric($flyplasskode)) {
    $lovligFlyplassFormat = false;
  }
  // Sjekk at flyplasskode kun innholder bokstaver a-z
  else {
    $tegn1 = substr($flyplasskode,0,1);
    $tegn2 = substr($flyplasskode,1,1);
    $tegn3 = substr($flyplasskode,2,1);
    if ($tegn1 < "a" || $tegn1 > "z" || $tegn2 < "a" || $tegn2 > "z" || $tegn3 < "a" || $tegn3 > "z") {
      $lovligFlyplassFormat = false;
    }
  }
  // Returner verdi for valideringen
  return $lovligFlyplassFormat;
}

function validerFlyplassUnik($flyplasskode) {
  $lovligFlyplassUnik = true;
  // Sjekk at flyplasskode er unik
  $fil = fopen("data/flyplass.txt", "r");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      if($tekst[0] == $flyplasskode) {
        $lovligFlyplassUnik = false;
      }
    }
  }
  fclose($fil);
  // Returner verdi for valideringen
  return $lovligFlyplassUnik;
}

function validerFlyruteFra($fraflyplass) {
  $lovligFlyruteFra = false;
  // Sjekk at flyplasskode for fraflyplass er registrert i FLYPLASS.TXT
  $fil = fopen("data/flyplass.txt", "r");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      if($tekst[0] == $fraflyplass) {
        $lovligFlyruteFra = true;
      }
    }
  }
  fclose($fil);
  // Returner verdi for valideringen
  return $lovligFlyruteFra;
}

function validerFlyruteTil($tilflyplass) {
  $lovligFlyruteTil = false;
  // Sjekk at flyplasskode for tilflyplass er registrert i FLYPLASS.TXT
  $fil = fopen("data/flyplass.txt", "r");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      if($tekst[0] == $tilflyplass) {
        $lovligFlyruteTil = true;
      }
    }
  }
  fclose($fil);
  // Returner verdi for valideringen
  return $lovligFlyruteTil;
}

function validerFlyruteUnik($fraflyplass, $tilflyplass) {
  $lovligFlyruteUnik = true;
  // Sjekk at kombinasjonen fraflyplass og tilflyplass er unik
  $fil = fopen("data/flyrute.txt", "r");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      if($tekst[0] == $fraflyplass && $tekst[1] == $tilflyplass) {
        $lovligFlyruteUnik = false;
      }
    }
  }
  fclose($fil);
  // Returner verdi for valideringen
  return $lovligFlyruteUnik;
}

function validerFlygningFlightnr($flightnr) {
  $lovligFlightnr = true;
  // Sjekk at flightnr er unik
  $fil = fopen("data/flygning.txt", "r");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      if($tekst[0] == $flightnr) {
        $lovligFlightnr = false;
      }
    }
  }
  fclose($fil);
  // Returner verdi for valideringen
  return $lovligFlightnr;
}

function validerFlygningFlyrute($fraflyplass, $tilflyplass) {
  $lovligFlyrute = false;
  // Sjekk at kombinasjonen fraflyplass og tilflyplass er registrert i FLYRUTE.TXT
  $fil = fopen("data/flyrute.txt", "r");
  while($tekstlinje = fgets($fil)) {
    if($tekstlinje != "") {
      $tekst = explode(';', $tekstlinje);
      $tekst = array_map('trim', $tekst);
      if($tekst[0] == $fraflyplass && $tekst[1] == $tilflyplass) {
        $lovligFlyrute = true;
      }
    }
  }
  fclose($fil);
  // Returner verdi for valideringen
  return $lovligFlyrute;
}

function validerFlygningDato($dato) {
  $lovligDato = false;
  $split = array();
  if(preg_match("/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/", $dato, $split)) {
    if(checkdate($split[2],$split[3],$split[1])) {
      $lovligDato = true;
    }
  }
  // Returner verdi for valideringen
  return $lovligDato;
}

function validerFlyrute() {
  $fraflyplass = trim($_POST["fraflyplass"]);
  $tilflyplass = trim($_POST["tilflyplass"]);
  $lovligFlyruteFra = validerFlyruteFra($fraflyplass);
  $lovligFlyruteTil = validerFlyruteTil($tilflyplass);
  $lovligFlyruteUnik = validerFlyruteUnik($fraflyplass, $tilflyplass);
  $feilmelding = "";
  if(!$lovligFlyruteFra) {
    $feilmelding .= "Flyplassen i feltet 'Fra flyplass' finnes ikke i databasen.<br />\n";
  }
  if(!$lovligFlyruteTil) {
    $feilmelding .= "Flyplassen i feltet 'Til flyplass' finnes ikke i databasen.<br />\n";
  }
  if(!$lovligFlyruteUnik) {
    $feilmelding .= "Flyruten finnes allerede i databasen. (må være unik)";
  }
  if($lovligFlyruteFra && $lovligFlyruteTil && $lovligFlyruteUnik) {
    return true;
  }
  else {
    print ("<div class='alert alert-danger' role='alert'>". $feilmelding ."</div>");
    return false;
  }
}

function validerFlyplass() {
  $flyplasskode = trim($_POST["flyplasskode"]);
  $lovligFlyplassFormat = validerFlyplassFormat($flyplasskode);
  $lovligFlyplassUnik = validerFlyplassUnik($flyplasskode);
  $feilmelding = "";
  if(!$lovligFlyplassFormat) {
    $feilmelding .= "Formatet på flyplass er feil. Må være tre små bokstaver, ingen tall.<br />\n";
  }
  if(!$lovligFlyplassUnik) {
    $feilmelding .= "Flyplasskoden finnes allerede i databasen. (må være unik)";
  }
  if($lovligFlyplassFormat && $lovligFlyplassUnik) {
    return true;
  }
  else {
    print ("<div class='alert alert-danger' role='alert'>". $feilmelding ."</div>");
    return false;
  }
}

function validerFlygning() {
  $flightnr = trim($_POST["flightnr"]);
  $fraflyplass = trim($_POST["fraflyplass"]);
  $tilflyplass = trim($_POST["tilflyplass"]);
  $dato = trim($_POST["dato"]);
  $lovligFlightnr = validerFlygningFlightnr($flightnr);
  $lovligFlyrute = validerFlygningFlyrute($fraflyplass, $tilflyplass);
  $lovligDato = validerFlygningDato($dato);
  $feilmelding = "";
  if(!$lovligFlightnr) {
    $feilmelding .= "Flightnr finnes allerede i database. (må være unik)<br />\n";
  }
  if(!$lovligFlyrute) {
    $feilmelding .= "Flyrute er ikke registrert i databasen.<br />\n";
  }
  if(!$lovligDato) {
    $feilmelding .= "Dato er ikke fyllt ut i korrekt format (ÅÅÅÅ-MM-DD).";
  }
  if($lovligFlightnr && $lovligFlyrute && $lovligDato) {
    return true;
  }
  else {
    print ("<div class='alert alert-danger' role='alert'>". $feilmelding ."</div>");
    return false;
  }
}
?>