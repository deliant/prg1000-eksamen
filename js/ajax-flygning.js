function fjernMelding() {
  document.getElementById("melding").innerHTML="";
  document.getElementById("respons").innerHTML="";
}

function vis(flyrute) {
  var foresporsel = new XMLHttpRequest();
  foresporsel.onreadystatechange = function() {
    if(foresporsel.readyState == 4 && foresporsel.status == 200) {
      document.getElementById("respons").innerHTML=foresporsel.responseText;
    }
  }
  foresporsel.open("GET", "libs/ajax-flygning.php?flyrute="+flyrute);
  foresporsel.send();
}