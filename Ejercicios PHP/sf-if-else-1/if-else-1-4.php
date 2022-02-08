<?php
/**
 * if ... else ... (1) 4 - if-else-1-4.php
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
    Tres dados. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Kaide
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Tres dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$num1 = rand(1, 6);
$num2 = rand(1, 6);
$num3 = rand(1, 6);
$numMax = max($num1, $num2, $num3);
print "  <p>
    <img src=\"img/$num1.svg\" alt=\"6\" width=\"140\" height=\"140\">
    <img src=\"img/$num2.svg\" alt=\"4\" width=\"140\" height=\"140\">
    <img src=\"img/$num3.svg\" alt=\"5\" width=\"140\" height=\"140\">
  </p>
";
if($num1 == $num2 && $num1 == $num3){
  print" <p>Ha sacado un trío de $num1.</p>\n";
}
elseif($num1 == $num2 && $num1 != $num3 || $num1 != $num2 && $num1 == $num3){
  print" <p>Ha sacado dobles de $num1.</p>\n";
}
elseif($num1 != $num2 && $num2 == $num3){
  print" <p>Ha sacado dobles de $num2.</p>\n";
}
else{
  print" <p>El valor más alto es $numMax</p>\n";
}



?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
