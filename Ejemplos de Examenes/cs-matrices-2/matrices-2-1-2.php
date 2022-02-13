<?php
/**
 * Tabla con casillas de verificación (Resultado) - matrices-2-1-2.php
 *
 * @author Kaide Wu
 *
 */
session_name("matrices-2-1-1");
session_start();
if (!isset($_SESSION["comprobacion"])){
  session_destroy();
  header("Location: matrices-2-1-1.php");
  exit;
}

 # Funcion recoge los datos
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

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tabla de una fila con casillas de verificación (Resultado).
    Matrices (2). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Tabla de una fila con casillas de verificación (Resultado)</h1>

<?php
$casilla = recoge("c", []);
$casillasNum = count($casillas);

if ($casillasNum == 0){
print "  <p>No ha marcado ninguna casilla.</p>\n";
}else{
  print "<p>Ha marcado <strong>$casillasNum</strong> casilla de un total de <strong>".count($_SESSION["lista"])."</strong>: <strong>";
  foreach ($casilla as $indice => $valor){
    print "$valor ";
  }
  print " </strong></p>\n";
  $_SESSION["lista"] = [];
}
?>

  <p><a href="matrices-2-1-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
