<?php
/**
 * Sesiones (2) 03 - ver.php
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
    Ver datos.
    Sesiones (2). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Ver datos</h1>

<?php

if(!isset($_SESSION["nombre"]) && !isset($_SESSION["apellidos"])){
  print "<p>Usted no ha escrito todavía ni su nombre ni sus apellidos</p>\n";
}elseif((!isset($_SESSION["nombre"]))){
  print "<p>Usted <strong>sólo</strong> ha escrito que su nombre es: <strong>asd</strong></p>\n";
}elseif((!isset($_SESSION["apellidos"]))){
  print "<p>Usted <strong>sólo</strong> ha escrito que su nombre es: <strong>asd</strong></p>\n";
}else{
  print "  <p>Usted ha escrito que su nombre es: <strong>$_SESSION[nombre]</strong></p>\n";
  print "  <p>Usted ha escrito que sus apellidos son: <strong>$_SESSION[apellidos]</strong></p>\n";
}



?>

  <p><a href="index.php">Volver al inicio.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
