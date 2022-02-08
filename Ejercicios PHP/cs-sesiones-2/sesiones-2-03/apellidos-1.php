<?php
/**
 * Sesiones (2) 03 - apellidos-1.php
 *
 * @author Kaide Wu
 *
 */

session_name("sesion2-3");
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Apellidos (1).
    Sesiones (2). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Borrar datos (1)</h1>

<?php

if (isset($_SESSION["apellidos"])) {
  print "  <p>Usted ya ha escrito que su nombre es: <strong>$_SESSION[apellidos]</strong></p>\n";
}

?>
  <form action="apellidos-2.php" method="get">
    <p>Escriba sus apellidos:</p>

<?php

if(isset($_SESSION["error"])){
  print "    <p><label>Apellidos: <input type=\"text\" name=\"apellidos\" size=\"30\" maxlength=\"30\"></label><span class=\"aviso\">$_SESSION[error]</span></p>\n";
}else{
  print "    <p><label>Apellidos: <input type=\"text\" name=\"apellidos\" size=\"30\" maxlength=\"30\"></label></p>\n";
}

?>
    <p>
      <input type="submit" value="Guardar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <p><a href="index.php">Volver al inicio.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
