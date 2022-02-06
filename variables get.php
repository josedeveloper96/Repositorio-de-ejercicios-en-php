<?php
/* imprimir por pantalla la tabla de multiplicar del numero pasado en un parametro GET por URL */
if(isset($_GET["numero"]) && is_numeric($_GET["numero"])){
  $numero = $_GET["numero"];
}else{
  $numero = 5;
}

echo "<h2>Tabla de multiplicar de ".$numero."</h2>";

for($i = 1; $i <= 10; $i++){
  echo $i. " x ".$numero. " = ".($i*$numero)."<br/>";
}
 ?>
