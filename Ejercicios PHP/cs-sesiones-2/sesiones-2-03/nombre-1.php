<?php
/**
 * Sesiones (2) 03 - nombre-1.php
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
    Nombre (1).
    Sesiones (2). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Nombre (1)</h1>

<?php
if (isset($_SESSION["nombre"])) {
    print "  <p>Usted ya ha escrito que su nombre es: <strong>$_SESSION[nombre]</strong></p>\n";
}
?>

  <form action="nombre-2.php" method="get">
    <p>Escriba su nombre:</p>

<?php

if(isset($_SESSION["error"])){
  print "    <p><label>Nombre: <input type=\"text\" name=\"nombre\" size=\"20\" maxlength=\"20\"></label><span class=\"aviso\">$_SESSION[error]</span</p>\n";
}else{
  print "    <p><label>Nombre: <input type=\"text\" name=\"nombre\" size=\"20\" maxlength=\"20\"></label></p>\n";
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
