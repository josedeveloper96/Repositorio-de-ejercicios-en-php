<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> tablas de multiplicar con for</title>
</head>
<body>
  <h1> ejemplo con ciclo for</h1>
  <hr>
  <form action="">
    <label for="numero"></label>
    <input type="text" name="numero" placeholder="ingrese numero">
    <input type="submit" value="Generar">
  </form>
  <hr>

  <?php

  if(isset($_REQUEST['numero']))
  {
    $num = $_REQUEST['numero'];

    for($contador=1;$contador<=10;$contador++)
    {
      $total = $num * $contador;
      print $num. " * ".$contador." * ".$total."<br>";
    }
  }else{
    print "<h2>ingerese un numero</h2>";
  }

  ?>

</body>
</html>
