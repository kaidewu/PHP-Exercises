<?php
/**
 * Controles en formularios (2) 4-2 - controles-formularios-2-04-2.php
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
    Datos personales 4 (Resultado).
    Controles en formularios (2). Con formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 4 (Resultado)</h1>

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
$correo = recoge("correo");
$confirmacion = recoge("correo2");
$recibir = recoge("recibir");

if($correo != $confirmacion){
print "<p class=\"aviso\">Las direcciones de correo no coinciden.</p>\n";
}elseif($recibir == "" && $recibir != "-1" && $recibir != "1" && $recibir != "0"){
  print "<p class=\"aviso\">Por favor, indique si quiere recibir o no correo.</p>\n";
}elseif($correo == $confirmacion && $recibir != "-1"){
  print "<p>Su dirección de correo es <strong>$correo</strong>.</p>\n";
  if($recibir == "1"){
    print "  <p><strong>Sí</strong> recibirá correos nuestros.</p>\n";
  }elseif($recibir == "0"){
    print "  <p><strong>NO</strong> recibirá correos nuestros.</p>\n";
  }
}elseif($recibir == "-1"){
  print "<p class=\"aviso\">No ha indicado si desea recibir correo.</p>\n";
}



?>

  <p><a href="controles-formularios-2-04-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
