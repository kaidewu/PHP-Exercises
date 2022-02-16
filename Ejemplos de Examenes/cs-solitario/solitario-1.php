<?php
/**
 * Solitario - solitario-1.php
 *
 * @author Kaide Wu
 *
 */
session_name("solitario");
session_start();
if (!isset($_SESSION["puntos"])){
  $_SESSION["puntos"] = 0;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Solitario. Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Solitario</h1>

  <p>Haga clic en uno de los botones para sacar otra carta o para volver a empezar.</p>

  <form action="solitario-2.php">

<?php

if ($_SESSION["puntos"] == 0){
  print "    <p>\n";
  print "      <img src=\"img/t10.svg\" alt=\"10\" width=\"100\" height=\"136\">\n";
  print "    </p>\n";
}else{
  print "    <p>\n";
  print "      <img src=\"img/t$_SESSION[cartas].svg\" alt=\"$_SESSION[cartas]\" width=\"100\" height=\"136\">\n";
  if (($_SESSION["puntos"] >= 50) && ($_SESSION["puntos"] <= 99)){
    print "<span style=\"font-size: 136px; vertical-align: top\">&#128515;</span>\n";
  }elseif ($_SESSION["puntos"] >= 100){
    print "<span style=\"font-size: 136px; vertical-align: top\">&#127881;</span>\n";
  }
  print "    </p>\n";
}
print "\n";
print "    <p>Puntos: $_SESSION[puntos]</p>\n";

?>

    <p>
      <button type="submit" name="accion" value="sacar">Sacar otra carta</button>
      <button type="submit" name="accion" value="empezar">Volver a empezar</button>
    </p>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
