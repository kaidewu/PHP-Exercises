<?php
/**
 * Matrices (1) 16 - matrices-1-16.php
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
    El bit más común.
    Matrices (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>El bit más común</h1>

  <p>Actualice la página para mostrar tres secuencias aleatorias de bits y una cuarta secuencia que indica cuál es el bit más común en esa posición.</p>

<?php
$valores1 = [];
$valores2 = [];
$valores3 = [];
$resultado = [];

for ($i = 0; $i < 10; $i++){
  $bits1 = rand(0, 1);
  $bits2 = rand(0, 1);
  $bits3 = rand(0, 1);
  $valores1 [] = $bits1;
  $valores2 [] = $bits2;
  $valores3 [] = $bits3;
}

for ($j = 0; $j < 10; $j++){
  if ($valores1[$j] == $valores2[$j]){
    $resultado[] = $valores1[$j];
  }
  elseif ($valores1[$j] == $valores3[$j]){
    $resultado[] = $valores1[$j];
  }
  elseif ($valores2[$j] == $valores3[$j]){
    $resultado[] = $valores2[$j];
  }
}

print "  <pre style=\"font-size: 300%;\">\n";
print "A: ";
foreach ($valores1 as $valor1){
  print " $valor1 ";
}
print "\n";
print "B: ";
foreach ($valores2 as $valor2){
  print " $valor2 ";
}
print "\n";

print "C: ";
foreach ($valores3 as $valor3){
  print " $valor3 ";
}
print "\n";

print "R: ";

foreach ($resultado as $valor){
  print " $valor ";
}
print "</pre>\n";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
