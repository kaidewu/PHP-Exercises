<?php
/**
 * if ... else ... (1) 1 - if-else-1-1.php
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
    Dos dados.
    if .. elseif ... else ... (1). Sin formularios.
    Kaide
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dos dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$num1 = rand(1, 6);
$num2 = rand(1, 6);

print "  <p>\n";
print "    <img src=\"img/$num1.svg\" alt=\"4\" width=\"140\" height=\"140\">\n";
print "    <img src=\"img/$num2.svg\" alt=\"1\" width=\"140\" height=\"140\">\n";
print "  </p>\n";
print "\n";
if ($num1 > $num2){
  print "  <p>No ha sacado pareja. El valor más alto es $num1.</p>\n";
}
elseif ($num1 < $num2){
  print "  <p>No ha sacado pareja. El valor más alto es $num2.</p>\n";
}
else{
  print "  <p>Ha sacado una prareja de $num1</p>\n";
}
?>

<footer>
    <p>Kaide</p>
  </footer>
</body>
</html>