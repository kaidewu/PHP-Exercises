<?php
/**
 *
 * @author Kaide Wu
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Reloj.
    Sin formularios.
    Exámenes. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Reloj</h1>

  <p>Actualice la página para mostrar una nueva hora.</p>

<?php

// Horas
$randHora1 = rand(0, 1);
if($randHora1 == 0){
  $randHora2 = rand(0, 9);
  print "  <h2>Son las 0$randHora2";
}elseif($randHora1 == 1){
  $randHora3 = rand(0, 1);
  print "  <h2>Son las 1$randHora3";
}

if ($randHora1 == 0 && $randHora2 == 0){
  $gradoHora = 0;
}elseif($randHora1 == 0){
 $gradoHora = $randHora2 * 30;
}elseif($randHora1 == 1 && $randHora3 == 0){
  $gradoHora = 10*30;
}else{
  $gradoHora = 11*30;
}

// Minutos
$randMin = rand(0, 59);
if($randMin >= 0 && $randMin <= 9){
  print ":0$randMin</h2>\n";
}else{
  print ":$randMin</h2>\n";
}

if($randMin == 0){
  $gradoMin = 0;
}else{
  $gradoMin = $randMin * 6;
}

print "  <p>\n";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"\n";
print "      width=\"220\" height=\"220\" viewBox=\"-110 -110 220 220\">\n";
print "      <circle cx=\"0\" cy=\"0\" r=\"100\" fill=\"white\" stroke=\"black\" stroke-width=\"5\" />\n";
print "      <line x1=\"0\" y1=\"0\" x2=\"0\" y2=\"-60\" stroke=\"black\" stroke-width=\"5\" transform=\"rotate($gradoHora, 0, 0)\" />\n";
print "      <line x1=\"0\" y1=\"0\" x2=\"0\" y2=\"-80\" stroke=\"black\" stroke-width=\"5\" transform=\"rotate($gradoMin, 0, 0)\" />\n";
print "    </svg>\n";
print "  </p>\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
