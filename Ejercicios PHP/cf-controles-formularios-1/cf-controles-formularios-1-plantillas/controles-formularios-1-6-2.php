<?php
/**
 * Controles en formularios (1) 6-2 - controles-formularios-1-6-2.php
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
    Colores 1 (Resultado).
    Controles en formularios (1). Con formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Colores 1 (Resultado)</h1>

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

$color_fondo = recoge("fondo");
$color_letra = recoge("letra");

if ($color_fondo == "el color del fondo" && $color_letra == ""){
  print "<p>Usted quiere cambiar: $color_fondo</p>\n";
} elseif ($color_fondo == "" && $color_letra == "el color de la letra"){
  print "<p>Usted quiere cambiar: $color_letra</p>\n";
}else {
  print "<p>Usted quiere cambiar: $color_fondo y $color_letra</p>\n";
}

?>

  <p><a href="controles-formularios-1-6-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
