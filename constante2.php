//define una constante con nombre.

<?php
define("CONSTANTE", "Hola mundo.");
echo CONSTANTE; //imprime "hola mundo"
echo constante; //imprime "constante" y emite un aviso

define("SALUDO", "Hola tu.");
echo SALUDO; //imprime "hola tu"
echo Saludo; //imprime "hola tu"

define('ANIMALES', array(
    'perro',
    'gato',
    'pájaro'
));
echo ANIMALES[1]; //muestra "gato"
 ?>
