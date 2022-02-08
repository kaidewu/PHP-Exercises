<?php
/**
 * for (1) 3 - for-1-03.php
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
    Círculos de colores en fila.
    for (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Círculos de colores en fila</h1>

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
for ($bucle = 0; $bucle < $num1; $bucle++) {
    $color = rand(0, 360);
    print "        <td>\n";
    print "          <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"70\" height=\"70\">\n";
    print "            <circle cx=\"35\" cy=\"35\" r=\"30\" fill=\"hsl($color, 100%, 50%)\" />\n";
    print "          </svg>\n";
    print "        </td>\n";
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
