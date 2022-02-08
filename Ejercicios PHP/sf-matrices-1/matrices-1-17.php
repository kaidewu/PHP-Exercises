<?php
/**
 * Matrices (1) 17 - matrices-1-17.php
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
    Partida de dados.
    Matrices (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Partida de dados</h1>

  <p>Actualice la página para mostrar una nueva partida de dados.</p>

<?php
$tirar = rand(2, 7);
$player1 = [];
$player2 = [];
$contador1 = 0;
$contador2 = 0;
$empate = 0;

print "  <h2>Jugador 1</h2>\n";
print "\n";
print "  <p>\n";
for ($i = 0; $i < $tirar; $i++){
  $dado = rand(1, 6);
  print "    <img src=\"img/$dado.svg\" alt=\"$dado\" width=\"140\" height=\"140\">";
  $player1[] = $dado;
}
print "  </p>\n";
print "\n";


print "  <h2>Jugador 2</h2>\n";
print "\n";
print "  <p>\n";
for ($j = 0; $j < $tirar; $j++){
  $dado = rand(1, 6);
  print "    <img src=\"img/$dado.svg\" alt=\"$dado\" width=\"140\" height=\"140\">";
  $player2[] = $dado;
}
print "  </p>\n";
print "\n";


print "  <h2>Resultado</h2>\n";
print "\n";

for ($k = 0; $k < $tirar; $k++){
  if ($player1[$k] > $player2[$k]){
    $contador1++;
  }
  elseif ($player1[$k] < $player2[$k]){
    $contador2++;
  }
  else{
    $empate++;
  }
}
print "  <p>El jugador 1 ha ganado <strong>$contador1</strong> veces, el jugador 2 ha ganado <strong>$contador2</strong> veces y los jugadores han empatado <strong>$empate</strong> veces.</p>\n";
print "\n";

if ($contador1 > $contador2){
  print "  <p>En conjunto, ha ganado el jugador 1.</p>\n";
}
elseif ($contador1 < $contador2){
  print "  <p>En conjunto, ha ganado el jugador 2.</p>\n";
}
else{
  print "  <p>En conjunto, han empatado.</p>\n";
}

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>

