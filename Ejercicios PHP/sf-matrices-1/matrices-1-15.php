<?php
/**
 * Matrices (1) 15 - matrices-1-15.php
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
    "Y" lógico.
    Matrices (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>"Y" lógico</h1>

  <p>Actualice la página para mostrar dos secuencias aleatorias de bits y su conjunción lógica.</p>

<?php
$valores1 = [];
$valores2 = [];
$logica = [];

for ($i = 0; $i < 10; $i++){
  $bits1 = rand(0, 1);
  $bits2 = rand(0, 1);
  $valores1 [] = $bits1;
  $valores2 [] = $bits2;
}

for ($j = 0; $j < 10; $j++){
  if ($valores1[$j] == 1 && $valores2[$j] == 1){
    $logica[] = 1;
  }
else {
  $logica[] = 0;
}
}

print "  <pre style=\"font-size: 300%;\">\n";
print "   A   : ";
foreach ($valores1 as $valor1){
  print " $valor1 ";
}
print "\n";
print "   B   : ";
foreach ($valores2 as $valor2){
  print " $valor2 ";
}
print "\n";

print "A and B: ";

foreach ($logica as $valor){
  print " $valor ";
}
print "</pre>\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
