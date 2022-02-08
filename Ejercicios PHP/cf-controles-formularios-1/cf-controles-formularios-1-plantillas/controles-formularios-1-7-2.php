<?php
/**
 * Controles en formularios (1) 7-2 - controles-formularios-1-7-2.php
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
    Colores 2 (Resultado).
    Controles en formularios (1). Con formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">

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

print "<p>Se han cambiado los colores elegidos.</p>\n";

?>
</head>

<body>
  <h1>Colores 2 (Resultado)</h1>

  <p>Se han cambiado los colores elegidos.</p>

  <p><a href="controles-formularios-1-7-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
