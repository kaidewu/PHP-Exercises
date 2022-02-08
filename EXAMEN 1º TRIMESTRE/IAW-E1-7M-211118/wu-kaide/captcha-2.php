<?php
/**
 *
 * @author Kaide Wu
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Captcha (Resultado).
    Con formularios.
    Exámenes. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Captcha (Resultado)</h1>

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
$secreto = recoge("secreto");
$elegido = recoge("elegido");
$correcto = false;

if ($elegido == "" && $secreto == ""){
  print "  <p class=\"aviso\">No ha elegido ninguno de los dibujos mostrados.</p>\n";
  print "  <p class=\"aviso\">No se ha recibido el dibujo a elegir como numero entero positivo.</p>\n";
}
elseif(ctype_digit($elegido) == false && ctype_digit($secreto) == false){
  print "  <p class=\"aviso\">No ha elegido ninguno de los dibujos mostrados.</p>\n";
  print "  <p class=\"aviso\">No se ha recibido el dibujo a elegir como numero entero positivo.</p>\n";
}
elseif($elegido == ""){
  print "  <p class=\"aviso\">No se ha recibido el dibujo a elegir.</p>\n";
}
elseif($secreto == ""){
  print "  <p class=\"aviso\">No se ha recibido el dibujo a elegir como numero.</p>\n";
}else{
  if ($secreto == $elegido){
    $correcto = true;
  }

  if ($correcto){
    print "<p>¡Enhorabuena! Ha elegido la imagen correcta.><p>\n";
  }else{
    print "<p>¡Lo siento! No ha elegido la imagen correcta.<p>\n";
  }
}

?>

  <p><a href="captcha-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
