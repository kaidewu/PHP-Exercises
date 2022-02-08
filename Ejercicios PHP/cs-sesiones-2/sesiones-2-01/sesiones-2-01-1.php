<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-1.php
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
    Formulario en dos pasos (Formulario 1).
    Sesiones (2). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Formulario en dos pasos (Formulario 1)</h1>

  <form action="sesiones-2-01-2.php" method="get">
    <p>Escriba su nombre:</p>

<?php
if(isset($_SESSION["error"]) == true){
  print "    <p><label>Nombre: <input type=\"text\" name=\"nombre\" size=\"20\" maxlength=\"20\"></label> <span class=\"aviso\">$_SESSION[error]</span></p>\n";
}else{
  print "    <p><label>Nombre: <input type=\"text\" name=\"nombre\" size=\"20\" maxlength=\"20\"></label></p>\n";
}

?>
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
