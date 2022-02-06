<?php
//obtener el valor de $_GET['user']
//devolver 'nadie' si no existe

$user = $_GET['user'] ?? 'nadie';

//esto equivale a:
$user = isset($_GET['user']) ? $_GET['user'] : 'nadie';

//con arreglos
$arr = array('one' => 'foo', 'two' => 'bar');

$one = $arra['one'] ?? 'empty';
//esto equiale a:
$one = isset($arr['one']) ? $arr['one'] : 'empty';

?>