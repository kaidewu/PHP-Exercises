<?php
/**
 * Matrices (3) 1 - matrices-3-01.php
 *
 * @author Kaide Wu
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Cartas extremas.
    Matrices (3). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cartas extremas</h1>

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
print "</p>\n";
print "\n";
print "<p>La carta más alta es un ".max($alta)." y la carta más baja es un ".min($alta)."</p>\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
