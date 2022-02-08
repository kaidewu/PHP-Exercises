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
    Cuatro contra uno.
    Sin formularios.
    Exámenes. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cuatro contra uno</h1>

  <p>Actualice la página para mostrar una nueva partida.</p>

<?php
 // JUGADOR 1
 $dadoA = rand(1, 6);
print "  <h2>Jugador A</h2>\n";
print "  <p>\n";
print "    <img src=\"img/dados/$dadoA.svg\" alt=\"$dadoA\" width=\"140\" height=\"140\">";
print "  </p>\n";

//JUGADOR 2
$valoresB = [];
print "  <h2>Jugador B</h2>\n";
print "  <p>\n";
for ($i = 0; $i < 4; $i++){
  $dadosB = rand(1, 6);
  print "    <img src=\"img/dados/$dadosB.svg\" alt=\"$dadosB\" width=\"140\" height=\"140\">";
  $valoresB[] = $dadosB;
}

// RESULTADO
$winA = false;
$winB = false;
for ($j = 0; $j < 4; $j++){
  if ($valoresB[$j] == $dadoA){
    $winB = true;
  }else{
    $winA = true;
  }
}

if($winB == true){
  print "<p>Ha ganado el jugador B.</p>\n";
}else{
  print "<p>Ha ganado el jugador A.</p>\n";
}




?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
