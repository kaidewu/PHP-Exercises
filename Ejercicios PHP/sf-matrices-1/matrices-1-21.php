<?php
/**
 * Matrices (1) 21 - matrices-1-21.php
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
    Elimina un valor.
    Matrices (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Elimina un valor</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$tirada = rand(1, 10);
$dadoDel = rand(1, 6);
$valores_T = [];
$valor_Del = [];

print "  <h2>Tirada de $tirada dado</h2>\n";
print "\n";
print "<p>\n";

for ($i = 0; $i < $tirada; $i++) {
  $dado = rand(1, 6);
  print "    <img src=\"img/$dado.svg\" alt=\"$dado\" width=\"80\" height=\"80\">";
  $valores_T [] = $dado;
}

print "  </p>\n";
print "\n";
print "  <h2>Dado a eliminar</h2>\n";
print "\n";
print "  <p>\n";
print "    <img src=\"img/$dadoDel.svg\" alt=\"$dadoDel\" width=\"80\" height=\"80\">\n";
$valor_Del [] = $dadoDel;
print "  </p>\n";
print "\n";

for ($j = 0; $j < $tirada; $j++) {
  if ($valor_Del[0] == $valores_T[$j]) {
    unset($valores_T[$j]);
  }
}

print "  <h2>Dados restantes</h2>\n";
print "\n";
print "  <p>\n";
foreach ($valores_T as $valor) {
  print "    <img src=\"img/$valor.svg\" alt=\"$valor\" width=\"80\" height=\"80\">";
}
print "  </p>\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
