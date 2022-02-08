<?php
/**
 *
 * @author Kaide Wu
 */
session_name("cartas-3");
session_start();
if(!isset($_SESSION["baraja"])){
  foreach (["d", "p", "c", "t"] as $letras) {
    foreach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13] as $numero){
        $_SESSION["baraja"][] = "$letras$numero";
    }
  }
  $_SESSION["cartas"] = [];
  $_SESSION["puntuacion"] = 0;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Siete y medio.
    Juegos de cartas (1). Sesiones.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Siete y medio (1)</h1>

  <form action="cartas-3-2.php" method="get">
    <p>Haga clic en el dorso de la carta para pedir otra carta:</p>

<?php

print "    <p>\n";
print "      <button type=\"submit\" name=\"accion\" value=\"otra\">\n";
print "        <img src=\"img/cartas/dorso-rojo.svg\" alt=\"dorso\" width=\"100\">\n";
print "      </button>\n";
if(isset($_SESSION["cartas"])){
  foreach($_SESSION["cartas"] as $valor){
    print "<img src=\"img/cartas/$valor.svg\" alt=\"$valor\" width=\"100\">\n";
  }
}
if($_SESSION["puntuacion"]){

}
print "    </p>\n";
?>

    <p><input type="submit" name="accion" value="reiniciar"></p>

  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
