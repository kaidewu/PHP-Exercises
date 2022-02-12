<?php
/**
 * Simon 1 - simon-1.php
 *
 * @author Kaide Wu
 */

session_start("simon")


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Simon.
    Con sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
  <style> button { background-color: white; padding: 0;}</style>
</head>

<body>
  <h1>Simon</h1>

<?php

  $numRandom = rand(1, 4);
  $RandomColor = "r$numRandom";
  print " <p> $RandomColor </p>"
  print " <p>Haga clic en este color: <img src=\"img/r3.svg\" alt=\"Color\" width=\"30\" height=\"30\" style=\"vertical-align: middle\"></p>\n";
  print "\n";
  print "  <form action=\"simon-2.php\">\n";
  print "    <p>\n";
  print "      <button name=\"eleccion\" value=\"1\">\n";
  print "        <img src=\"img/1.svg\" alt=\"Marrón\" width=\"150\" height=\"150\">\n";
  print "      </button>\n";
  print "      <button name=\"eleccion\" value=\"2\">\n";
  print "        <img src=\"img/2.svg\" alt=\"Naranja\" width=\"150\" height=\"150\">\n";
  print "      </button>\n";
  print "      <br>\n";
  print "      <button name=\"eleccion\" value=\"3\">\n";
  print "        <img src=\"img/3.svg\" alt=\"Azul\" width=\"150\" height=\"150\">\n";
  print "      </button>\n";
  print "      <button name=\"eleccion\" value=\"4\">\n";
  print "        <img src=\"img/4.svg\" alt=\"Rojo\" width=\"150\" height=\"150\">\n";
  print "      </button>\n";
  print "    </p>\n";
  print "\n";
  print "    <p><strong>Aciertos</strong>: 1</p>\n";
  print "\n";
  print "    <p><strong>Fallos</strong>: 1</p>\n";
  print "\n";
  print "    <p><input type=\"submit\" name=\"eleccion\" value=\"Reiniciar\"></p>\n";
  print "  </form>\n";


?>
    <p><input type="submit" name="eleccion" value="Reiniciar"></p>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
