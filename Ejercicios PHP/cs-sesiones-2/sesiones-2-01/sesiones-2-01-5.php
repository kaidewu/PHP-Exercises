<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-3.php
 *
 * @author Kaide Wu
 *
 */

session_name("sesion2-1");
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario en dos pasos (Resultado).
    Sesiones (2). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Formulario en dos pasos (Resultado)</h1>

<?php

print "<p>Su nombre y apellidos son: <strong>$_SESSION[nombre] $_SESSION[apellidos]</strong>.</p>\n";

?>
  <p><a href="sesiones-2-01-1.php">Volver al principio.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
