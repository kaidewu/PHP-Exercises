<?php
/**
 * Sesiones (1) 01 - sesiones-1-01-2.php
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
    Formulario Texto 1 (Resultado).
    Sesiones (1). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Formulario Texto 1 (Resultado)</h1>

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
$texto = recoge('texto');
$textoOK = false;

if ($texto == ""){
  print "  <p class=\"aviso\">No ha escrito nada.</p>\n";
}else{
  $textoOK = true;
}

if ($textoOK){
  print "<p>El texto es: <strong>$texto</strong>.</p>\n";
  $_SESSION["texto"] = $texto;
}

?>

  <p><a href="sesiones-1-01-1.php">Volver a la primera página.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
