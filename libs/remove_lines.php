<?php
$lines = file("D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v11/flyplass.txt");
array_pop($lines);

$contents = implode(';', $lines);
$file = fopen("D:\\Sites\\home.hbv.no\\phptemp\\web-prg10v11/flyplass.txt", "a") or die("Kan ikke åpne filen");
fwrite($file, "$contents");
fclose($file);
?>