<?php
/**
 * Trío de cartas - trio-cartas-1.php
 *
 * @author Kaide Wu
 */
session_name("triocartas");
session_start();
if (!isset($_SESSION["cambios"])){
  $_SESSION["cambios"] = 0;
  $_SESSION["cartas1"] = rand(1, 10);
  $_SESSION["cartas2"] = rand(1, 10);
  $_SESSION["cartas3"] = rand(1, 10);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Trío de cartas.
    Con sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Trío de cartas</h1>

  <form action="trio-cartas-2.php">
<?php

if (($_SESSION["cartas1"] == $_SESSION["cartas2"]) && ($_SESSION["cartas2"] == $_SESSION["cartas3"])){
  print "    <p>¡Trío conseguido! Ha tenido que hacer $_SESSION[cambios] cambios de cartas.</p>\n";
  print "\n";
  print "    <p>\n";
  print "      <button type=\"submit\" name=\"cambia\" value=\"0\">Volver a empezar</button>\n";
  print "    </p>\n";

}else{
  print "    <p>Haga clic en una de las cartas para cambiarla. El juego termina cuando obtenga tres cartas iguales.</p>\n";
  print "\n";
  print "    <p>\n";
  print "      <button type=\"submit\" name=\"cambia\" value=\"1\">\n";
  print "        <img src=\"img/c$_SESSION[cartas1].svg\" alt=\"$_SESSION[cartas1]\" width=\"140\" height=\"140\">\n";
  print "      </button>\n";
  print "      <button type=\"submit\" name=\"cambia\" value=\"2\">\n";
  print "        <img src=\"img/c$_SESSION[cartas2].svg\" alt=\"$_SESSION[cartas2]\" width=\"140\" height=\"140\">\n";
  print "      </button>\n";
  print "      <button type=\"submit\" name=\"cambia\" value=\"3\">\n";
  print "        <img src=\"img/c$_SESSION[cartas3].svg\" alt=\"$_SESSION[cartas3]\" width=\"140\" height=\"140\">\n";
  print "      </button>\n";
  print "    </p>\n";
  print "\n";
  print "    <p>Cambios de cartas realizados: $_SESSION[cambios]</p>\n";
}


?>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
