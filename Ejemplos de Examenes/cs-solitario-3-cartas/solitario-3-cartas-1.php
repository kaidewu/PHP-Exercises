<?php
/**
 * Solitario de tres carta- solitario-3-cartas-1.php
 *
 * @author Kaide Wu
 *
 */
session_name("solitario-3");
session_start();
if (!isset($_SESSION["puntos"])){
  $_SESSION["puntos"] = 0;
  $_SESSION["cambios"] = 3;
  $_SESSION["carta1"] = rand(1, 10);
  $_SESSION["carta2"] = rand(1, 10);
  $_SESSION["carta3"] = rand(1, 10);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Solitario de tres carta.
    Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Solitario de tres cartas</h1>

  <p>Haga clic en una de las cartas para cambiarla (como mucho puede hacer tres cambios).</p>

  <p>Haga clic en el botón "Terminar" para indicar que no quiere cambiar ninguna más.</p>

  <p>Haga clic en el botón "Nueva partida" para volver a empezar.</p>

  <form action="solitario-3-cartas-2.php">

<?php

print "    <p>\n";
print "      <button type=\"submit\" name=\"accion\" value=\"carta1\">\n";
print "        <img src=\"img/c$_SESSION[carta1].svg\" alt=\"$_SESSION[carta1]\" width=\"140\" height=\"140\">\n";
print "      </button>\n";
print "      <button type=\"submit\" name=\"accion\" value=\"carta2\">\n";
print "        <img src=\"img/c$_SESSION[carta2].svg\" alt=\"$_SESSION[carta2]\" width=\"140\" height=\"140\">\n";
print "      </button>\n";
print "      <button type=\"submit\" name=\"accion\" value=\"carta3\">\n";
print "        <img src=\"img/c$_SESSION[carta3].svg\" alt=\"$_SESSION[carta3]\" width=\"140\" height=\"140\">\n";
print "      </button>\n";
print "    </p>\n";
print "\n";
if ($_SESSION["cambios"] == 0){
  print "    <p>Partida terminada: $_SESSION[puntos] puntos</p>\n";
}

?>

    <p>
      <button type="submit" name="accion" value="terminar">Terminar</button>
      <button type="submit" name="accion" value="nueva">Nueva partida</button>
    </p>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
