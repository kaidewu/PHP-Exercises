<?php
/**
 * Todos los dados - todos-dados-1.php
 *
 * @author Kaide Wu
 */
session_name("tododados");
session_start();
if (!isset($_SESSION["tiradas"])){
  $_SESSION["tiradas"] = 0;
  $_SESSION["dados"] = 0;
  $_SESSION["dado1"] = 0;
  $_SESSION["dado2"] = 0;
  $_SESSION["dado3"] = 0;
  $_SESSION["dado4"] = 0;
  $_SESSION["dado5"] = 0;
  $_SESSION["dado6"] = 0;
  $_SESSION["alt1"] = "Pendiente";
  $_SESSION["alt2"] = "Pendiente";
  $_SESSION["alt3"] = "Pendiente";
  $_SESSION["alt4"] = "Pendiente";
  $_SESSION["alt5"] = "Pendiente";
  $_SESSION["alt6"] = "Pendiente";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Todos los dados (Formulario).
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Todos los dados</h1>

  <form action="todos-dados-2.php" method="get">
<?php

if ($_SESSION["tiradas"] != 0){
  print "    <h2>Tirada de dado</h2>\n";
  print "\n";
  print "    <p><img src=\"img/$_SESSION[dados].svg\" alt=\"$_SESSION[dados]\" width=\"140\" height=\"140\"></p>\n";
  print "\n";
}
print "    <h2>Dados ya conseguidos</h2>\n";
print "\n";
print "    <p>\n";
print "      <img src=\"img/$_SESSION[dado1].svg\" alt=\"$_SESSION[alt1]\" width=\"140\" height=\"140\">\n";
print "      <img src=\"img/$_SESSION[dado2].svg\" alt=\"$_SESSION[alt2]\" width=\"140\" height=\"140\">\n";
print "      <img src=\"img/$_SESSION[dado3].svg\" alt=\"$_SESSION[alt3]\" width=\"140\" height=\"140\">\n";
print "      <img src=\"img/$_SESSION[dado4].svg\" alt=\"$_SESSION[alt4]\" width=\"140\" height=\"140\">\n";
print "      <img src=\"img/$_SESSION[dado5].svg\" alt=\"$_SESSION[alt5]\" width=\"140\" height=\"140\">\n";
print "      <img src=\"img/$_SESSION[dado6].svg\" alt=\"$_SESSION[alt6]\" width=\"140\" height=\"140\">\n";
print "    </p>\n";
print "\n";
print "    <p>Número de tiradas: $_SESSION[tiradas]</p>\n";
print "    <p>\n";
print "      <input type=\"submit\" name=\"siguiente\" value=\"Nueva tirada\">\n";
print "      <input type=\"submit\" name=\"siguiente\" value=\"Reiniciar\">\n";
print "    </p>\n";

?>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
