<?php
/**
 * Sesiones (1) 01 - sesiones-1-01-1.php
 *
 * @author Kaide Wu
 *
 */
session_name('sesion1-02');
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario Texto 1 (Formulario).
    Sesiones (1). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Formulario Texto 1 (Formulario)</h1>

<?php

if($_SESSION["texto"] != ""){
  print "<p>El último texto escrito es: <strong>$_SESSION[texto]</strong>.</p>\n";
}

?>

  <form action="sesiones-1-01-2.php" method="get">
    <p><label>Escriba texto: <input type="text" name="texto" size="20" maxlength="20"></label></p>

    <p>
      <input type="submit" value="Siguiente">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
