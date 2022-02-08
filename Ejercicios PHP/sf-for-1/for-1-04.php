<?php
/**
 * for (1) 4 - for-1-04.php
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
    Círculos de colores numerados.
    for (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Círculos de colores numerados</h1>

  <p>Actualice la página para mostrar un nuevo dibujo.</p>

<?php
$num1 = rand(1, 10);
if ($num1 == 1){
  print "  <h2>$num1 círculo</h2>\n";
}
else{
  print "  <h2>$num1 círculos</h2>\n";
}
print "  <table class=\"conborde\">\n";
print "    <tbody>\n";
print "      <tr>\n";
for ($i = 0; $i < $num1; $i++) {
  $color = rand(0, 360);
  $numero = rand(1, 9);
    print "
        <td>
          <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"70\" height=\"70\" font-size=\"45\">
            <circle cx=\"35\" cy=\"35\" r=\"30\" fill=\"hsl($color, 100%, 50%)\" />
            <text x=\"35\" y=\"50\" text-anchor=\"middle\">$numero</text>
          </svg>
        </td>\n";
}
print "      </tr>\n";
print "    </tbody>\n";
print "  </table>\n";
?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
