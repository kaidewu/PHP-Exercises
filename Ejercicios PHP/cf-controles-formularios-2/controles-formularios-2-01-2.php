<?php
/**
 * Controles en formularios (2) 1-2 - controles-formularios-2-01-2.php
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
    Datos personales 1 (Resultado).
    Controles en formularios (2). Con formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 1 (Resultado)</h1>

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
$nombre = recoge('nombre');
$apellidos = recoge('apellidos');

$nombreOK = false;
$apellidosOK = false;

if ($nombre == "" && $apellidos == "") {
  print "  <p class=\"aviso\">No ha escrito su nombre.</p>\n";
  print "  <p class=\"aviso\">No ha escrito sus apellidos.</p>\n";
} elseif($nombre == "") {
  print "  <p class=\"aviso\">No ha escrito su nombre.</p>\n";
} elseif($apellidos == "") {
  print "  <p class=\"aviso\">No ha escrito sus apellidos.</p>\n";
} else{
  $nombreOK = True;
  $apellidosOK = true;
}

if($nombreOK && $apellidosOK){
  print "  <p>Su nombre es <strong>$nombre</strong>.</p>\n";
  print "  <p>Sus apellidos son <strong>$apellidos</strong>.</p>\n";

}

?>

  <p><a href="controles-formularios-2-01-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
