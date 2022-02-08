<?php
/**
 * Controles en formularios (2) 2-2 - controles-formularios-2-02-2.php
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
    Datos personales 2 (Resultado).
    Controles en formularios (2). Con formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 2 (Resultado)</h1>

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
$edad = recoge('edad');
$peso = recoge('peso');

$edadOK = false;
$pesoOK = false;

if ($edad == "" && $peso== "") {
  print "  <p class=\"aviso\">No ha escrito su edad.</p>\n";
  print "  <p class=\"aviso\">No ha escrito sus peso.</p>\n";
} elseif($edad == "") {
  print "  <p class=\"aviso\">No ha escrito su edad.</p>\n";
} elseif($peso == "") {
  print "  <p class=\"aviso\">No ha escrito sus peso.</p>\n";
} else{
  $edadOK = true;
  $pesoOK = true;
}

if ($edadOK && $pesoOK) {
    print "  <p>Su edad es <strong>$edad</strong> años.</p>\n";
    print "  <p>Su peso es <strong>$peso</strong> kilos.</p>\n";
}
?>

  <p><a href="controles-formularios-2-02-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
