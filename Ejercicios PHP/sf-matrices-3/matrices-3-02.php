<?php
/**
 * Matrices (3) 2 - matrices-3-02.php
 *
 * @author Kaide Wu
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    La carta más alta.
    Matrices (3). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>La carta más alta</h1>

<?php
$tirada = rand(5, 10);
$alta = [];

print "  <h2>Cartas</h2>\n";
print "\n";
print "  <p>\n";
for ($i = 0; $i < $tirada; $i++) {
  $random = rand(1, 10);
  print "    <img src=\"img/cartas/t$random.svg\" alt=\"$random de tréboles\" width=\"100\">";
  $alta[] = $random;
}

$delete = max($alta);
print "</p>\n";
print "\n";
print "<p>La carta más alta es un ".max($alta).".</p>\n";
print "\n";

print "  <h2>Carta a eliminar</h2>\n";
print "\n";
print "  <p>\n";
print "    <img src=\"img/cartas/t$delete.svg\" alt=\" $delete de tréboles\" width=\"100\">\n";
print "  </p>\n";
print "\n";
for ($j = 0; $j < $tirada; $j++){
  if ($delete == $alta[$j])
  unset($alta[$j]);
}


print "  <h2>Cartas restantes</h2>\n";
print "\n";
print "  <p>\n";
foreach ($alta as $valor){
  print "    <img src=\"img/cartas/t$valor.svg\" alt=\"$valor de tréboles\" width=\"100\">\n";
}
print " </p>\n";
print "\n";
print "<p>La carta más alta es ahora un ".max($alta).".</p>\n";
print "\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
