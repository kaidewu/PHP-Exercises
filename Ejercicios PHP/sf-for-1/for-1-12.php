<?php
/**
 * for (1) 12 - for-1-12.php
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
    Dado máximo.
    for (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dado máximo</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$num1 = rand(1, 10);
if ($num1 == 1){
  print "  <h2>$num1 dado</h2>\n";
}
else{
  print "  <h2>$num1 dados</h2>\n";
}

$maximo = 0;
print "<p>\n";
for ($i = 0; $i < $num1; $i++) {
  $random = rand(1, 6);
  print"<img src=\"img/$random.svg\" alt=\"$random\" width=\"140\" height=\"140\">\n";
  if ($random > $maximo){
  $maximo = $random;
  }
}
print"</p>\n";
print "
  <p>El valor más grande obtenido es <strong>$maximo</strong>.</p>\n";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
