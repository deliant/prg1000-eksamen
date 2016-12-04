<?php
function validerFlyplasskode($flyplasskode) {
  $lovligFlyplasskode = true;

  if(!$flyplasskode) {
    $lovligFlyplasskode = false;
  }
  else if(strlen($flyplasskode) != 3) {
    $lovligFlyplasskode = false;
  }
  else if(is_numeric($flyplasskode)) {
    $lovligFlyplasskode = false;
  }
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