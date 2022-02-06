<?php
echo '<p>Hola Mundo</p>';
//variables locales
$integer=1;
$float=1.5;
$isTrue=false;
$arrayColores = array('Azul','morado','negro');
$string="Hola esto es php";

echo $integer;
echo $float;
if($isTrue){
  echo $arrayColores[0];
  echo $string;
  echo "verdadero";
}
//Variables Locales y globales
  function variablesGlobales(){
    $local="soy la variable local";
    echo $GLOBALS["local"];
    echo $local;
  }
  $local="soy la variable global";
  variablesGlobales();
 ?>
