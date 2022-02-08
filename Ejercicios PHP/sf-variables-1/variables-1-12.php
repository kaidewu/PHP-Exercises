<?php
/**
 * Variables. Sin formularios.(1) 12 - variables-1-12.php
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
    Avance de ficha.
    Variables. Sin formularios.
    Kaide
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Avance de ficha</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$randomNum = rand(1, 6);
$CirclePosition = ($randomNum * 100) - 50;

print "<p>\n";
print "    <img src=\"img/".$randomNum.".svg\" alt=".$randomNum." width=\"140\" height=\"140\">\n";
print "  </p>\n";
print "\n";
print "  <p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"\n";
print "      width=\"620\" height=\"120\" viewBox=\"-15 -15 620 120\" style=\"background-color: white;\" font-family=\"sans-serif\">\n";
print "      <rect x=\"0\" y=\"0\" width=\"100\" height=\"100\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />\n";
print "      <text x=\"50\" y=\"80\" text-anchor=\"middle\" font-size=\"80\" fill=\"lightgray\">1</text>\n";
print "      <rect x=\"100\" y=\"0\" width=\"100\" height=\"100\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />\n";
print "      <text x=\"150\" y=\"80\" text-anchor=\"middle\" font-size=\"80\" fill=\"lightgray\">2</text>\n";
print "      <rect x=\"200\" y=\"0\" width=\"100\" height=\"100\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />\n";
print "      <text x=\"250\" y=\"80\" text-anchor=\"middle\" font-size=\"80\" fill=\"lightgray\">3</text>\n";
print "      <rect x=\"300\" y=\"0\" width=\"100\" height=\"100\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />\n";
print "      <text x=\"350\" y=\"80\" text-anchor=\"middle\" font-size=\"80\" fill=\"lightgray\">4</text>\n";
print "      <rect x=\"400\" y=\"0\" width=\"100\" height=\"100\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />\n";
print "      <text x=\"450\" y=\"80\" text-anchor=\"middle\" font-size=\"80\" fill=\"lightgray\">5</text>\n";
print "      <rect x=\"500\" y=\"0\" width=\"100\" height=\"100\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />\n";
print "      <text x=\"550\" y=\"80\" text-anchor=\"middle\" font-size=\"80\" fill=\"lightgray\">6</text>\n";
print "      <circle cx=".$CirclePosition." cy=\"50\" r=\"30\" stroke=\"black\" stroke-width=\"2\" fill=\"red\" />\n";
print "    </svg>\n";
print "  </p>\n";


?>

  <footer>
    <p>Kaide</p>
  </footer>
</body>
</html>
