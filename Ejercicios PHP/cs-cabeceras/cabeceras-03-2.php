<?php
/**
 * Formulario 3-2 - cabeceras-03-2.php
 *
 * @author Kaide Wu
 *
 */

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
$edad = recoge("edad");

if($edad == ""){
  header("Location:cabeceras-03-1.php?aviso= No ha escrito su edad");
  exit;
}

if($edad < "18" && $edad >"130"){
  header("Location:cabeceras-03-1.php?aviso= No ha escrito su edad");
  exit;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario 3 (Resultado).
    Cabeceras. Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Formulario 3 (Resultado)</h1>

<?php

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>

  <p><a href="cabeceras-03-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
