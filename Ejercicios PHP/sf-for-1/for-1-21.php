<?php
/**
 * for (1) 21 - for-1-21.php
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
    Diana.
    for (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Diana</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$tiros = rand(1, 10);

print "<p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "      width=\"420\" height=\"420\" viewBox=\"-210 -210 420 420\">\n";
print "      <circle cx=\"0\" cy=\"0\" r=\"200\" fill=\"red\" />\n";
print "      <circle cx=\"0\" cy=\"0\" r=\"180\" fill=\"#ddd\" />\n";
print "      <circle cx=\"0\" cy=\"0\" r=\"160\" fill=\"red\" />\n";
print "      <circle cx=\"0\" cy=\"0\" r=\"140\" fill=\"#ddd\" />\n";
print "      <circle cx=\"0\" cy=\"0\" r=\"120\" fill=\"red\" />\n";
print "      <circle cx=\"0\" cy=\"0\" r=\"100\" fill=\"#ddd\" />\n";
print "      <circle cx=\"0\" cy=\"0\" r=\"80\" fill=\"red\" />\n";
print "      <circle cx=\"0\" cy=\"0\" r=\"60\" fill=\"#ddd\" />\n";
print "      <circle cx=\"0\" cy=\"0\" r=\"40\" fill=\"red\" />\n";
print "      <circle cx=\"0\" cy=\"0\" r=\"20\" fill=\"#ddd\" />\n";

$contador = 0;
$totalpuntos = 0;
for ($i = 0; $i < $tiros; $i++) {
    $x = rand(-200, 200);
    $y = rand(-200, 200);
    print "      <path fill=\"black\" stroke=\"white\" stroke-width=\"2\" d=\"m $x, $y m -1,-9 4.4,2.5 3.6,0.6 0.5,2.9 2.2,2.9 -2.2,3.1 -0.1,3.6 -3.3,0.2 -1.7,2.7 -4,-1.4 -3.9,0.2 -0.9,-4.2 -2.7,-2.6 1.7,-3.4 0,-3 z\" />\n";
    $contador++;
    $diametro = sqrt(pow($x, 2) + pow($y, 2));
    $numFranjas = floor($diametro / 20);
    $puntos = 10 - $numFranjas;
    if ($puntos >= 0){
      $totalpuntos = $totalpuntos + $puntos;
    }
}
if ($totalpuntos < 0){
  $totalpuntos = 0;
}

print "    </svg>\n";
print "  </p>\n";
print "\n";

print "  <h2>Estadísticas</h2>\n";
print "\n";
print "  <ul>\n";
print "    <li>Número de disparos: <strong>$contador</strong>.</li>\n";
print "    <li>Puntuación obtenida: <strong>$totalpuntos</strong>.</li>\n";
print "  </ul>\n";
print "\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
