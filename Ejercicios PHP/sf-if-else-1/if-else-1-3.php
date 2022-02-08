<?php
/**
 * if ... else ... (1) 3 - if-else-1-3.php
 *
 * @author Kaide
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dos dados más altos. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Kaide
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Juego: Dos dados más altos</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

  <table>
    <tbody>
      <tr>
        <th>Jugador 1</th>
        <th>Jugador 2</th>
        <th>Resultado</th>
      </tr>
      <tr>
<?php
$num1 = rand(1, 6);
$num2 = rand(1, 6);
$num3 = rand(1, 6);
$num4 = rand(1, 6);
$player1 = $num1 + $num2;
$player2 = $num3 + $num4;

print "        <td style=\"padding: 10px; background-color: red;\">\n";
print "          <img src=\"img/$num1.svg\" alt=\"3\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$num2.svg\" alt=\"6\" width=\"140\" height=\"140\">\n";
print "        </td>\n";
print "        <td style=\"padding: 10px; background-color: blue;\">\n";
print "          <img src=\"img/$num3.svg\" alt=\"4\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$num4.svg\" alt=\"4\" width=\"140\" height=\"140\">\n";
print "        </td>\n";
if ($num1 == $num2 && $num3 != $num4){
  print "        <td>Ha ganado el jugador 1</td>\n";
}
elseif ($num1 != $num2 && $num3 == $num4){
  print "        <td>Ha ganado el jugador 2</td>\n";
}
elseif ($num1 == $num2 && $num3 == $num4){
  print "        <td>Han empatado</td>\n";
}
elseif ($player1 > $player2){
  print "        <td>Ha ganado el jugador 1</td>\n";
}
elseif ($player1 < $player2){
  print "        <td>Ha ganado el jugador 2</td>\n";
}
elseif ($player1 == $player2){
  print "        <td>Han empatado</td>\n";
}
print "      </tr>\n";
print "    </tbody>\n";
print "  </table>\n";


?>
      </tr>
    </tbody>
  </table>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
