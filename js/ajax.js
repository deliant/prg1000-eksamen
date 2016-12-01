/**
 * Created by marius on 10.11.16.
 */
function fjernMelding() {
  document.getElementById("melding").innerHTML="";
  document.getElementById("respons").innerHTML="";
}

function vis(klassekode) {
  var foresporsel = new XMLHttpRequest();
  foresporsel.onreadystatechange = function() {
    if(foresporsel.readyState == 4 && foresporsel.status == 200) {
      document.getElementById("respons").innerHTML=foresporsel.responseText;
    }
  }
  foresporsel.open("GET", "js/ajax.php?klassekode="+klassekode);
  foresporsel.send();
}
