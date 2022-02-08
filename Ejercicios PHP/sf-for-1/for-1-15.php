<?php
/**
 * for (1) 15 - for-1-15.php
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
    Contar dados máximos.
    for (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Contar dados máximos</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

$num1 = rand(1, 10);
if ($num1 == 1){
  print "  <h2>$num1 dado</h2>\n";
}
else{
  print "  <h2>$num1 dados</h2>\n";
}

$grande = 0;
$maximo = 0;
$veces = 0;
print "<p>\n";
for ($i = 0; $i < $num1; $i++) {
  $random = rand(1, 6);
  print"<img src=\"img/$random.svg\" alt=\"$random\" width=\"140\" height=\"140\">\n";
  if ($random > $maximo){
    $maximo = $random;
    $veces = 1;
    }
  elseif($random == $maximo){
    $veces ++;
  }
}
print"</p>\n";
print "
<p>El valor más grande obtenido es <strong>$maximo</strong>. Este valor se ha obtenido ";
if ($veces == 1){
print"<strong>$veces</strong> vez.</p>\n";
}
else{
print"<strong>$veces</strong> veces.</p>\n";
}

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
