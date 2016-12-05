function fjernMelding() {
  document.getElementById("melding").innerHTML="";
  document.getElementById("respons").innerHTML="";
}

function validerFlyplasskode() {
  var flyplasskode = document.getElementById("flyplasskode").value;
  var tegn1, tegn2, tegn3;
  var lovligFlyplasskode = true;
  if(!flyplasskode) {
    lovligFlyplasskode = false;
    document.getElementById("melding").innerHTML="Flyplasskode ikke fyllt ut.<br />";
  }
  else if(flyplasskode.length != 3) {
    lovligFlyplasskode = false;
    document.getElementById("melding").innerHTML="Flyplasskode har ikke riktig antall bokstaver. (3 små)<br />";
  }
  else {
    tegn1 = flyplasskode.substr(0,1);
    tegn2 = flyplasskode.substr(1,1);
    tegn3 = flyplasskode.substr(2,1);

    if(tegn1 < "a" || tegn1 > "z" || tegn2 < "a" || tegn2 > "z" || tegn3 < "a" || tegn3 > "z") {
      lovligFlyplasskode = false;
      document.getElementById("melding").innerHTML="Flyplasskode innholder andre karakterer enn a-z.";
    }
  }
  //document.getElementById("melding").innerHTML=feilMelding;
  return lovligFlyplasskode;
}

function validerFlyruteFra(fraflyplass) {
  var tegn1, tegn2, tegn3;
  var lovligFlyruteFra = true;
  if(!fraflyplass) {
    lovligFlyruteFra = false;
    document.getElementById("melding").innerHTML="Flyplasskode i 'Fra flyplass' ikke fyllt ut.<br />";
  }
  else if(fraflyplass.length != 3) {
    lovligFlyruteFra = false;
    document.getElementById("melding").innerHTML="Flyplasskode i 'Fra flyplass' har ikke riktig antall bokstaver. (3 små)<br />";
  }
  else {
    tegn1 = fraflyplass.substr(0,1);
    tegn2 = fraflyplass.substr(1,1);
    tegn3 = fraflyplass.substr(2,1);

    if(tegn1 < "a" || tegn1 > "z" || tegn2 < "a" || tegn2 > "z" || tegn3 < "a" || tegn3 > "z") {
      lovligFlyruteFra = false;
      document.getElementById("melding").innerHTML="Flyplasskode i 'Fra flyplass' innholder andre karakterer enn a-z.";
    }
  }
  //document.getElementById("melding").innerHTML=feilMelding;
  return lovligFlyruteFra;
}

function validerFlyruteTil(tilflyplass) {
  var tegn1, tegn2, tegn3;
  var lovligFlyruteTil = true;
  if(!tilflyplass) {
    lovligFlyruteTil = false;
    document.getElementById("melding").innerHTML="Flyplasskode i 'Til flyplass' ikke fyllt ut.<br />";
  }
  else if(tilflyplass.length != 3) {
    lovligFlyruteTil = false;
    document.getElementById("melding").innerHTML="Flyplasskode i 'Til flyplass' har ikke riktig antall bokstaver. (3 små)<br />";
  }
  else {
    tegn1 = tilflyplass.substr(0,1);
    tegn2 = tilflyplass.substr(1,1);
    tegn3 = tilflyplass.substr(2,1);

    if(tegn1 < "a" || tegn1 > "z" || tegn2 < "a" || tegn2 > "z" || tegn3 < "a" || tegn3 > "z") {
      lovligFlyruteTil = false;
      document.getElementById("melding").innerHTML="Flyplasskode i 'Til flyplass' innholder andre karakterer enn a-z.";
    }
  }
  //document.getElementById("melding").innerHTML=feilMelding;
  return lovligFlyruteTil;
}

function validerFlyrute() {
  var fraflyplass = document.getElementById("fraflyplass").value;
  var tilflyplass = document.getElementById("tilflyplass").value;
  var lovligFlyruteFra = validerFlyruteFra(fraflyplass);
  var lovligFlyruteTil = validerFlyruteTil(tilflyplass);
  if(lovligFlyruteFra && lovligFlyruteTil) {
    return true;
  }
  else {
    return false;
  }
}