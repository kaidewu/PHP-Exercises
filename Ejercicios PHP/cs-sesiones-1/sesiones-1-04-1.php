<?php
/**
 * Sesiones (1) 04 - sesiones-1-04-1.php
 *
 * @author Kaide Wu
 *
 */
session_name("sesion1-04");
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
  Formulario Palabras en mayúsculas y minúsculas (Formulario).
    Sesiones (1). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Formulario Palabras en mayúsculas y minúsculas (Formulario)</h1>

  <form action="sesiones-1-04-2.php" method="get">

<?php

if (isset($_SESSION["mayusNO"]) == false &&  isset($_SESSION["minusNO"]) == false && isset($_SESSION["mayus"]) && isset($_SESSION["minus"])){
print "<p>Ha escrito una palabra en mayúsculas: <strong>$_SESSION[mayus]</strong>.</p>\n";
print "    <p>Ha escrito una palabra en minúsculas: <strong>$_SESSION[minus]</strong>.</p>\n";
}
print "    <p>Escriba una palabra en mayúsculas y otra en minúsculas:</p>\n";
print "    <p><label>Mayúsculas:";
if(isset($_SESSION["mayusNO"])){
  print " <input type=\"text\" name=\"mayusculas\" size=\"20\" maxlength=\"20\"></label><span class=\"aviso\">$_SESSION[mayusNO]</span></p>\n";
}else{
  print " <input type=\"text\" name=\"mayusculas\" size=\"20\" maxlength=\"20\"></label></p>\n";
}

print "    <p><label>Minúsculas: ";
if(isset($_SESSION["minusNO"])){
  print "<input type=\"text\" name=\"minusculas\" size=\"20\" maxlength=\"20\"></label><span class=\"aviso\">$_SESSION[minusNO]</span></p>\n";
}else{
  print "<input type=\"text\" name=\"minusculas\" size=\"20\" maxlength=\"20\"></label></p>\n";
}

?>
    <p>
      <input type="submit" value="Comprobar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
