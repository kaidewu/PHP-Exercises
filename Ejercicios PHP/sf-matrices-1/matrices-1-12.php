<?php
/**
 * Matrices (1) 12 - matrices-1-12.php
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
    Negación.
    Matrices (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Negación de bits</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y su complementaria.</p>

<?php
$valores = [];
$reverse = [];

for ($i = 0; $i < 10; $i++){
  $bits = rand(0, 1);
  $valores [] = $bits;
  if ($bits == 0){
    $bits = 1;
    $reverse [] = $bits;
  }
  else{
    $bits = 0;
    $reverse [] = $bits;
  }
}

print "  <pre style=\"font-size: 300%;\">\n";
print "A:";
foreach ($valores as $valor){
  print " $valor ";
}

print "\n";
print "<span style=\"text-decoration: overline\">A</span>:";
foreach ($reverse as $r_valor){
  print " $r_valor ";
}
print "</pre>\n";
print "\n";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
