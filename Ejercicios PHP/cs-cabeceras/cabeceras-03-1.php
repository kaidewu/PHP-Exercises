<?php
/**
 * Formulario 3-1 - cabeceras-03-1.php
 *
 * @author Kaide Wu
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario 3 (Formulario).
    Cabeceras. Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Formulario 3 (Formulario)</h1>

  <form action="cabeceras-03-2.php" method="get">

<?php
// FUNCIÓN DE RECOGIDA DE DATOS
function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}
$aviso = recoge("aviso");

if($aviso== ""){
  print "<p><label>Escriba su edad (entre 18 y 130 años): <input type=\"text\" name=\"edad\" size=\"5\" maxlength=\"3\"></label></p>\n";
}else{
  print "<p><label>Escriba su edad (entre 18 y 130 años): <input type=\"text\" name=\"edad\" size=\"5\" maxlength=\"3\"></label> <span class=\"aviso\">$aviso</span></p>\n";
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
