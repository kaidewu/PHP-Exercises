<?php
/**
 * Controles en formularios (2) 3-2 - controles-formularios-2-03-2.php
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
    Datos personales 3 (Resultado).
    Controles en formularios (2). Con formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 3 (Resultado)</h1>

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
$genero = recoge('genero');
$hombreOK = false;
$mujerOK = false;

if ($genero == ""){
  print "  <p class=\"aviso\">No ha indicado su sexo.</p>\n";
} elseif($genero == "mujer"){
  $mujerOK = true;
} elseif($genero == "hombre"){
  $hombreOK = true;
} elseif ($genero != "hombre" && $genero != "mujer"){
  print "<p class=\"aviso\">Por favor, indique si su sexo es hombre o mujer.</p>\n";
}

if($hombreOK == true){
  print "<p>Es un <strong>$genero</strong>.</p>\n";
}elseif ($mujerOK == true){
  print "<p>Es un <strong>$genero</strong>.</p>\n";
}

$cine = recoge('cine');
$literatura = recoge("literatura");
$musica = recoge('musica');
$cineOK = false;
$literaturaOK = false;
$musicaOK = false;

if ($cine == "" && $literatura == "" && $musica == "") {
    print "<p>No ha marcado ninguna afición.</p>\n";
}
if($cine != "" && $cine != "on"){
  print "<p class=\"aviso\">Por favor, indique si le gusta o no el cine.</p>\n";
}elseif($cine == "on"){
  $cineOK = true;
}
if($literatura != "" && $literatura != "on"){
  print "<p class=\"aviso\">Por favor, indique si le gusta o no la literatura.</p>\n";
}elseif($literatura == "on"){
  $literaturaOK = true;
}
if($musica != "" && $musica != "on"){
  print "<p class=\"aviso\">Por favor, indique si le gusta o no la musica.</p>\n";
}elseif ($musica == "on"){
  $musicaOK = true;
}

if($cineOK && $literaturaOK && $musicaOK){
  print "<p>Le gusta <strong>el cine</strong>.</p>\n";
  print "<p>Le gusta <strong> la literatura</strong>.</p>\n";
  print "<p>Le gusta <strong>la musica</strong>.</p>\n";
}elseif ($cineOK && $literaturaOK){
  print "<p>Le gusta <strong>el cine</strong>.</p>\n";
  print "<p>Le gusta <strong> la literatura</strong>.</p>\n";
}elseif($cineOK && $musicaOK){
  print "<p>Le gusta <strong>el cine</strong>.</p>\n";
  print "<p>Le gusta <strong>la musica</strong>.</p>\n";
}elseif($literaturaOK && $musicaOK){
  print "<p>Le gusta <strong> la literatura</strong>.</p>\n";
  print "<p>Le gusta <strong>la musica</strong>.</p>\n";
}elseif($cineOK){
  print "<p>Le gusta <strong>el cine</strong>.</p>\n";
}elseif($literaturaOK){
  print "<p>Le gusta <strong>la literatura</strong>.</p>\n";
}elseif($musicaOK){
  print "<p>Le gusta <strong>la musica</strong>.</p>\n";
}

?>

  <p><a href="controles-formularios-2-03-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
