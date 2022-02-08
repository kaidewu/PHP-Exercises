<?php
/**
 * Matrices (1) 22 - matrices-1-12.php
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
    Elimina un animal.
    Matrices (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Elimina un animal</h1>

  <p>Actualice la página para mostrar un nuevo grupo de animales.</p>

<?php
$tirada = rand(20, 30);
$emoji_Del = rand(128000, 128060);
$valores_T = [];
$valor_Del = [];
$contador = 0;

print "<h2>$tirada animales</h2>\n";
print "\n";

print "  <p style=\"font-size: 400%; margin: 0;\">\n";
for ($i = 0; $i < $tirada; $i++){
  $emoji = rand(128000, 128060);
  print "    &#$emoji;";
  $valores_T[] = $emoji;
}

print "</p>\n";
print "\n";
print "  <h2>Animal a eliminar</h2>\n";
print "\n";
print "  <p style=\"font-size: 400%; margin: 0;\">\n";
print "    &#$emoji_Del;\n";
$valor_Del [] = $emoji_Del;
print "  </p>\n";
print "\n";

for ($j = 0; $j < $tirada; $j++) {
  if ($valor_Del[0] == $valores_T[$j]){
    unset($valores_T[$j]);
  }
}

print "  <h2>Quedan $contador animales</h2>\n";
print "\n";
print "  <p style=\"font-size: 400%; margin: 0;\">\n";
foreach ($valores_T as $valor) {
  print "    &#$valor;";
}
print "</p>\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
