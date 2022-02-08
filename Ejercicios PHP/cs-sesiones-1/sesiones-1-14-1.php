<?php
/**
 * Sesiones (1) 14 - sesiones-1-14-1.php
 *
 * @author Kaide Wu
 *
 */

session_name("sesion1-14");
session_start();
if(isset($_SESSION["a"]) == false && isset($_SESSION["b"]) == false){
  $_SESSION["a"] = 0;
  $_SESSION["b"] = 0;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Votar una opción.
    Sesiones (1). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Votar una opción</h1>

  <form action="sesiones-1-14-2.php" method="get">
    <p>Haga clic en los botones para votar por una opción:</p>

    <table>
      <tr>
        <td style="vertical-align: top;"><button type="submit" name="accion" value="a" style="font-size: 60px; line-height: 50px; color: hsl(200, 100%, 50%);">&#x2714;</button></td>
        <td>
<?php

print "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "            width=\"$_SESSION[a]\" height=\"50\">\n";
print "            <line x1=\"0\" y1=\"25\" x2=\"$_SESSION[a]\" y2=\"25\" stroke=\"hsl(200, 100%, 50%)\" stroke-width=\"50\" />\n";
print "          </svg>\n";

?>

      </tr>
      <tr>
        <td><button type="submit" name="accion" value="b" style="font-size: 60px; line-height: 50px; color: hsl(35, 100%, 50%)">&#x2714;</button></td>
        <td>
<?php

print "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "            width=\"$_SESSION[b]\" height=\"50\">\n";
print "            <line x1=\"0\" y1=\"25\" x2=\"$_SESSION[b]\" y2=\"25\" stroke=\"hsl(35, 100%, 50%)\" stroke-width=\"50\" />\n";
print "          </svg>\n";

?>
        </td>
      </tr>
    </table>

    <p>
      <button type="submit" name="accion" value="cero">Poner a cero</button>
    </p>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
