<meta charset="utf-8"/>
<?php
//* escribe un programa que multiplique los 20 primeros numeros naturale usando el bucle while //*
$numero = 1;
$contador =2;
while ($contador <= 20) {
  // $numero = $numero * $contador;
  $numero *= $contador;

  echo $numero."<br/>";

  $contador++;
}
?>
