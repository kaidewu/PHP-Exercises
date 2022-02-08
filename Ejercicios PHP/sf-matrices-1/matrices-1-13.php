<?php
/**
 * Matrices (1) 13 - matrices-1-13.php
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
    Cambio de bits.
    Matrices (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cambio de bits</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y la detección de cambios de bits consecutivos en la secuencia.</p>

<?php
$valores = [];
$delta = [];

for ($i = 0; $i < 10; $i++){
  $bits = rand(0, 1);
  $valores [] = $bits;
}

for ($j = 0; $j < 9; $j++){
  if ($valores[$j] == $valores[$j + 1]){
    $delta [] = 1;
  }
  else{
    $delta [] = 0;
  }
}

print "<pre style=\"font-size: 300%;\">\n";
print " A:";
foreach ($valores as $valor){
  print " $valor ";
}

print "\n";
print "&Delta;A: ";
foreach ($delta as $valordelta){
  print " $valordelta ";
}
print "</pre>\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
