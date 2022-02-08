<?php
/**
 * Variables. Sin formularios.(1) 13 - variables-1-13.php
 *
 * @author Kaide
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tres cuadrados.
    Variables. Sin formularios.
    Kaide
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Tres cuadrados</h1>

  <p>Actualice la página para mostrar tres nuevos cuadrados.</p>

<?php
$square1 = rand(50, 150);
$square2 = rand(50, 150);
$square3 = rand(50, 150);
$ancho = ($square1 + $square2 + $square3) + 20;
$alto = max($square1, $square2, $square3) + 20;
print "<p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"\n";
print "      width=".$ancho." height=".$alto." viewBox=\"-10 -10 ".$ancho." ".$alto."\" style=\"background-color: white;\" font-family=\"sans-serif\">\n";
print "      <rect x=\"0\" y=\"0\" width=$square1 height=$square1 fill=\"red\" />\n";
print "      <rect x=$square1 y=\"0\" width=$square2 height=$square2 fill=\"green\" />\n";
print "      <rect x=".$square1 + $square2." y=\"0\" width=$square3 height=$square3 fill=\"blue\" />\n";
print "    </svg>\n";
print "  </p>\n";


?>

  <footer>
    <p>Kaide</p>
  </footer>
</body>
</html>
