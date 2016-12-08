function fokus(element) {
  element.style.background="#dfdfdf";
}

function mistetFokus(element) {
  element.style.background="";
}

function musInn(element) {
  if (element == document.getElementById("flyplasskode")) {
    document.getElementById("melding").innerHTML="Flyplasskode til flyplassen. Tre store bokstaver. (må være unik)";
  }
  if (element == document.getElementById("flyplassnavn")) {
    document.getElementById("melding").innerHTML="Flyplassnavnet er det fullstendige navnet på flyplassen.";
  }
  if (element == document.getElementById("flightnr")) {
    document.getElementById("melding").innerHTML="Flightnr på flygningen. To store bokstaver, tre tall. (må være unik)";
  }
  if (element == document.getElementById("dato")) {
    document.getElementById("melding").innerHTML="Dato, fylles ut i formatet ÅÅÅÅ-MM-DD.";
  }
}

function musUt() {
  document.getElementById("melding").innerHTML="";
}

function storeBokstaver(element) {
  element.value=element.value.toUpperCase();
}