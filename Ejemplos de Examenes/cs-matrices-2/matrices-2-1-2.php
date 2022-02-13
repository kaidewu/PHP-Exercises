<?php
/**
 * Tabla con casillas de verificación (Resultado) - matrices-2-1-2.php
 *
 * @author Kaide Wu
 *
 */
session_name("matrices-2-1-1");
session_start();
if (!isset($_SESSION["lista"])){
  header("Location: trio-cartas-1.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tabla de una fila con casillas de verificación (Resultado).
    Matrices (2). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Tabla de una fila con casillas de verificación (Resultado)</h1>

<?php

print "<p>Ha marcado <strong>". count($_SESSION["lista"]) ."</strong> casilla de un total de <strong>$_SESSION[numRandom]</strong>: <strong>".
foreach ($_SESSION["lista"] as $valor){
  print "$valor "}
." </strong></p>\n";

?>

  <p><a href="matrices-2-1-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
