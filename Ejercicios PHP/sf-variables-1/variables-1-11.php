<?php
/**
 * Variables. Sin formularios.(1) 11 - variables-1-11.php
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
    Cuatro círculos.
    Variables. Sin formularios.
    Kaide
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cuatro círculos</h1>

<?php
$num1  = rand(50, 150);
$num2 = $num1 * 3;
$num3 = $num1 * 5;
$num4 = $num1 * 7;
$ancho = (($num1 * 2) * 4) + 10;
$alto = ($num1 * 2) + 10;

print "<p>Estos círculos tienen ".$num1." px de radio. Actualice la página para mostrar cuatro nuevos círculos.</p>\n";


print "<p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"\n";
print "      width=".$ancho." height=".$alto." viewBox=\"-10 -10 ".$ancho." ".$alto."\" style=\"background-color: white;\" font-family=\"sans-serif\">\n";
print "      <circle cx=".$num1." cy=".$num1." r=".$num1." stroke=\"black\" stroke-width=\"1\" fill=\"red\" />\n";
print "      <circle cx=".$num2." cy=".$num1." r=".$num1." stroke=\"black\" stroke-width=\"1\" fill=\"yellow\" />\n";
print "      <circle cx=".$num3." cy=".$num1." r=".$num1." stroke=\"black\" stroke-width=\"1\" fill=\"green\" />\n";
print "      <circle cx=".$num4." cy=".$num1." r=".$num1." stroke=\"black\" stroke-width=\"1\" fill=\"blue\" />\n";
print "    </svg>\n";
print "  </p>\n";


?>

  <footer>
    <p>Kaide</p>
  </footer>
</body>
</html>
