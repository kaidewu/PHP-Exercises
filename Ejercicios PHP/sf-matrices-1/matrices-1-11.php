<?php
/**
 * Matrices (1) 11 - matrices-1-11.php
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
    Tirada de dados.
    Matrices (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$numdados = rand(2, 7);
$valores = [];

print "<h2>Tirada de $numdados dados</h2>\n";
print "\n";
print "  <p>\n";

for($i = 0; $i < $numdados; $i++){
  $random = rand(0, 5);
  $dados = rand(1, 6);
  print "    <img src=\"img/$dados.svg\" alt=\"$dados\" width=\"140\" height=\"140\">\n";
  $valores[] = $dados;
}

print "  </p>\n";
print "\n";
print "  <h2>Resultado</h2>\n";
print "\n";
print "  <p>Los valores obtenidos son:  ";
foreach($valores as $valor){
  print " $valor ";
}
print "</p>\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
