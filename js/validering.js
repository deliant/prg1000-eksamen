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

function validerFlightnr(flightnr) {
  var tegn1, tegn2, tegn3, tegn4, tegn5;
  var lovligFlightnr = true;
  var feilMelding = "";
  if(!flightnr) {
    lovligFlightnr = false;
    feilMelding = feilMelding + "Flightnr ikke fyllt ut.<br />";
  }
  else if(flightnr.length != 5) {
    lovligFlightnr = false;
    feilMelding = feilMelding + "Flightnr har ikke riktig antall karakterer (5).<br />";
  }
  else {
    tegn1 = flightnr.substr(0,1);
    tegn2 = flightnr.substr(1,1);
    tegn3 = flightnr.substr(2,1);
    tegn4 = flightnr.substr(3,1);
    tegn5 = flightnr.substr(4,1);
    if(tegn1 < "A" || tegn1 > "Z" || tegn2 < "A" || tegn2 > "Z" || tegn3 < "0" || tegn3 > "9" || tegn4 < "0" || tegn4 > "9" ||  tegn5 < "0" || tegn5 > "9") {
      lovligFlightnr = false;
      feilMelding = feilMelding + "Flightnr innholder andre karakterer enn A-Z eller tall (store bokstaver).<br />";
    }
  }
  return lovligFlightnr;
}

function validerDato(dato) {
  var regEx = /^\d{4}-\d{2}-\d{2}$/;
  var lovligDato = true;
  var feilMelding = "";
  if(!dato.match(regEx)) {
    lovligDato = false;
    feilMelding = feilMelding + "Dato har ikke korrekt format (ÅÅÅÅ-MM-DD).<br />";
  }
  var d;
  if(!((d = new Date(dato))|0)) {
    lovligDato = false;
    feilMelding = feilMelding + "Ikke gyldig dato. (kan ikke være bak i tid)";
  }
  return d.toISOString().slice(0,10) == dato;
}

function validerFlygning() {
  var flightnr = document.getElementById("flightnr").value;
  var dato = document.getElementById("dato").value;
  var lovligFlightnr = validerFlightnr(flightnr);
  var lovligDato = validerDato(dato);
  if(lovligFlightnr && lovligDato) {
    return true;
  }
  else {
    document.getElementById("melding").innerHTML=feilMelding;
    return false;
  }
}