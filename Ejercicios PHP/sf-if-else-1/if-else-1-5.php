<?php
/**
 * if ... else ... (1) 5 - if-else-1-5.php
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
    Tres dados más altos. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Kaide
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Juego: Tres dados más altos</h1>

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
$num5 = rand(1, 6);
$num6 = rand(1, 6);

print "      <tr>\n";
print "        <td style=\"padding: 10px; background-color: red;\">\n";
print "          <img src=\"img/$num1.svg\" alt=\"1\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$num2.svg\" alt=\"2\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$num3.svg\" alt=\"5\" width=\"140\" height=\"140\">\n";
print "        </td>\n";
print "        <td style=\"padding: 10px; background-color: blue;\">\n";
print "          <img src=\"img/$num4.svg\" alt=\"1\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$num5.svg\" alt=\"1\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$num6.svg\" alt=\"2\" width=\"140\" height=\"140\">\n";
print "        </td>\n";

$trio1 = ($num1 == $num2 && $num1 == $num3) ? $num1 : 0;
$trio2 = ($num4 == $num5 && $num4 == $num6) ? $num4 : 0;

$pareja1 = ($num1 == $num2 || $num1 == $num3) ? $num1 : (($num2 == $num3) ? $num2 : 0);
$pareja2 = ($num4 == $num5 || $num4 == $num6) ? $num4 : (($num5 == $num6) ? $num5 : 0);

$total1 = $num1 + $num2 + $num3;
$total2 = $num4 + $num5 + $num6;

if ($trio1 > $trio2) {
    print "        <td>Ha ganado el jugador 1</td>\n";
} elseif ($trio1 < $trio2) {
    print "        <td>Ha ganado el jugador 2</td>\n";
} elseif ($pareja1 > $pareja2) {
    print "        <td>Ha ganado el jugador 1</td>\n";
} elseif ($pareja1 < $pareja2) {
    print "        <td>Ha ganado el jugador 2</td>\n";
} elseif ($total1 > $total2) {
    print "        <td>Ha ganado el jugador 1</td>\n";
} elseif ($total1 < $total2) {
    print "        <td>Ha ganado el jugador 2</td>\n";
} else {
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
