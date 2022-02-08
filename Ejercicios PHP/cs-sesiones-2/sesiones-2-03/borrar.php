<?php
/**
 * Sesiones (2) 03 - borrar.php
 *
 * @author Kaide Wu
 *
 */
session_name("sesion2-3");
session_start();
session_unset();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Borrar datos.
    Sesiones (2). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Borrar datos</h1>

  <p>Los datos han sido borrados.</p>

  <p><a href="index.php">Volver al inicio.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
