<?php
/**
 * Matrices (1) 14 - matrices-1-14.php
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
    De binario a Gray.
    Matrices (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Convertidor de binario a código de Gray</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y su conversión a código de Gray.</p>

<?php
$valores = [];
$grey = [];

for ($i = 0; $i < 10; $i++){
  $bits = rand(0, 1);
  $valores [] = $bits;
}

$grey [] = $valores[0];

for ($j = 0; $j < 8; $j++){
  if($valores[$j + 1] == $valores[$j + 2]){
    $grey [] = 1;
  }
  else{
    $grey [] = 0;
  }
}
$grey [] = $valores[9];

print "  <pre style=\"font-size: 300%\">\n";
print "B: ";
foreach ($valores as $valor){
  print " $valor ";
}
print "\n";

print "G: ";
foreach ($grey as $greyvalor){
  print " $greyvalor ";
}

print "</pre>\n";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
