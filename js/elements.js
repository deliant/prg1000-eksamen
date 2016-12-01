/**
 * Created by marius on 04.11.16.
 */
function fokus(element) {
  element.style.background="yellow";
}

function mistetFokus(element) {
  element.style.background="";
}

function musInn(element) {
  if (element == document.getElementById("klassekode")) {
    document.getElementById("melding").innerHTML="Klassekoder har to store bokstaver og ett tall";
  }
  if (element == document.getElementById("klassenavn")) {
    document.getElementById("melding").innerHTML="Klassenavnet er det fullstendige navnet på klassen (mindre enn 20 tegn)";
  }
  if (element == document.getElementById("brukernavn")) {
    document.getElementById("melding").innerHTML="Brukernavnet til studenten (to små bokstaver)";
  }
  if (element == document.getElementById("fornavn")) {
    document.getElementById("melding").innerHTML="Fornavnet til studenten (mindre enn 18 tegn, ikke tall)";
  }
  if (element == document.getElementById("etternavn")) {
    document.getElementById("melding").innerHTML="Etternavnet til studenten (mindre enn 18 tegn, ikke tall)";
  }
}

function musUt() {
  document.getElementById("melding").innerHTML="";
  document.getElementById("respons").innerHTML="";
}

function storeBokstaver(element) {
  element.value=element.value.toUpperCase();
}

function smaaBokstaver(element) {
  element.value=element.value.toLowerCase();
}