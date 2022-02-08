<?php
/**
 * Controles en formularios (1) 9-2 - controles-formularios-1-9-2.php
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
    Dibuja cuadrado 2 (Resultado).
    Controles en formularios (1). Con formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dibuja cuadrado 2 (Resultado)</h1>

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
$ancho = recoge("ancho");
$grosor = recoge("grosor");

print "  <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "    width=\"".($ancho + 12)."px\" height=\"".($ancho + 12)."px\">\n";
print "    <rect fill=\"white\" stroke=\"black\" stroke-width=\"6\" x=\"3\" y=\"3\" width=\"".($ancho + 6)."\" height=\"".($ancho + 6)."\" />\n";
print "  </svg>\n";


?>

  <p><a href="controles-formularios-1-9-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
