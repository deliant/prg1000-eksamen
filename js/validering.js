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
    document.getElementById("melding").innerHTML="Flyplasskode har ikke riktig antall karakterer (3).<br />";
  }
  else {
    tegn1 = flyplasskode.substr(0,1);
    tegn2 = flyplasskode.substr(1,1);
    tegn3 = flyplasskode.substr(2,1);

    if(tegn1 < "A" || tegn1 > "Z" || tegn2 < "A" || tegn2 > "Z" || tegn3 < "A" || tegn3 > "Z") {
      lovligFlyplasskode = false;
      document.getElementById("melding").innerHTML="Flyplasskode innholder andre karakterer enn A-Z (store bokstaver).";
    }
  }
  return lovligFlyplasskode;
}

function validerFlyrute() {
  var fraflyplass = document.getElementById("fraflyplass").value;
  var tilflyplass = document.getElementById("tilflyplass").value;
  var frategn1, frategn2, frategn3, tiltegn1, tiltegn2, tiltegn3;
  var feilMelding;
  var lovligFlyrute = true;
  feilMelding = "";
  if(fraflyplass.length != 3) {
    lovligFlyrute = false;
    document.getElementById("melding").innerHTML="Flyplasskode i 'Fra flyplass' har ikke riktig antall bokstaver (3).<br />";
  }
  else if(tilflyplass.length != 3) {
    lovligFlyrute = false;
    document.getElementById("melding").innerHTML="Flyplasskode i 'Til flyplass' har ikke riktig antall bokstaver (3).<br />";
  }
  else {
    frategn1 = fraflyplass.substr(0,1);
    frategn2 = fraflyplass.substr(1,1);
    frategn3 = fraflyplass.substr(2,1);

    if(frategn1 < "A" || frategn1 > "Z" || frategn2 < "A" || frategn2 > "Z" || frategn3 < "A" || frategn3 > "Z") {
      lovligFlyrute = false;
      document.getElementById("melding").innerHTML="Flyplasskode i 'Fra flyplass' innholder andre karakterer enn A-Z (store bokstaver).<br />";
    }
    tiltegn1 = tilflyplass.substr(0,1);
    tiltegn2 = tilflyplass.substr(1,1);
    tiltegn3 = tilflyplass.substr(2,1);

    if(tiltegn1 < "A" || tiltegn1 > "Z" || tiltegn2 < "A" || tiltegn2 > "Z" || tiltegn3 < "A" || tiltegn3 > "Z") {
      lovligFlyrute = false;
      document.getElementById("melding").innerHTML="Flyplasskode i 'Til flyplass' innholder andre karakterer enn A-Z (store bokstaver).<br />";
    }
  }
  return lovligFlyrute;
}