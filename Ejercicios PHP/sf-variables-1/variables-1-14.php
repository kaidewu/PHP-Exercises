<?php
/**
 * Variables. Sin formularios.(1) 14 - variables-1-14.php
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
    Tres círculos.
    Variables. Sin formularios.
    Kaide
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Círculos de color</h1>

  <p>Actualice la página para mostrar tres nuevos círculos.</p>

<?php
$circle1 = rand(50, 150);
$circle2 = rand(50, 150);
$circle3 = rand(50, 150);
$maxRadio = max($circle1, $circle2, $circle3);
$Circle2X = 2 * $circle1 + $circle2;
$Circle3X = 2 * $circle1 + 2 * $circle2 + $circle3;
$ancho = ($Circle3X + $maxRadio) + 20;
$alto = 2 * max($circle1, $circle2, $circle3) + 20;

print "<p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"\n";
print "      width=$ancho height=$alto viewBox=\"-10 -10 $ancho $alto\" style=\"background-color: white;\" font-family=\"sans-serif\">\n";
print "      <circle cx=$circle1 cy=$maxRadio r=$circle1 stroke=\"black\" stroke-width=\"2\" fill=\"red\" />\n";
print "      <circle cx=$Circle2X cy=$maxRadio r=$circle2 stroke=\"black\" stroke-width=\"2\" fill=\"green\" />\n";
print "      <circle cx=$Circle3X  cy=$maxRadio r=$circle3 stroke=\"black\" stroke-width=\"2\" fill=\"blue\" />\n";
print "    </svg>\n";
print "  </p>\n";


?>

  <footer>
    <p>Kaide</p>
  </footer>
</body>
</html>
