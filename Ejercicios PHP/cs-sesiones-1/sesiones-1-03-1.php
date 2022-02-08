<?php
/**
 * Sesiones (1) 03 - sesiones-1-03-1.php
 *
 * @author Kaide Wu
 *
 */

session_name("sesion3-1");
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario Palabra en mayúsculas (Formulario).
    Sesiones (1). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Formulario Palabra en mayúsculas (Formulario)</h1>

  <form action="sesiones-1-03-2.php" method="get">

<?php
if (isset($_SESSION["error"]) == false && isset($_SESSION["palabra"]) == true){
  print "<p>Ha escrito una palabra en mayúsculas: <strong>$_SESSION[palabra]</strong>.</p>\n";
}

print "    <p><label>Escriba una palabra en mayúsculas:";

if(isset($_SESSION["error"])){
  print "<input type=\"text\" name=\"palabra\" size=\"20\" maxlength=\"20\"></label><span class=\"aviso\">$_SESSION[error]</span>\n";
}else{
  print "<input type=\"text\" name=\"palabra\" size=\"20\" maxlength=\"20\"></label>\n";
}
print "</p>\n";

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
