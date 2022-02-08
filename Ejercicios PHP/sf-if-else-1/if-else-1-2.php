<?php
/**
 * if ... else ... (1) 2 - if-else-1-2.php
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
    Dado más alto. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Kaide
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Juego: Dado más alto</h1>

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
print "        <td style=\"padding: 10px; background-color: red;\">\n";
print "          <img src=\"img/$num1.svg\" alt=\"5\" width=\"140\" height=\"140\">\n";
print "        </td>\n";
print "        <td style=\"padding: 10px; background-color: blue;\">\n";
print "          <img src=\"img/$num2.svg\" alt=\"6\" width=\"140\" height=\"140\">\n";
print "        </td>\n";
if ($num1 > $num2){
  print "        <td>Ha ganado el jugador 1</td>\n";
}
elseif ($num1 < $num2){
  print "        <td>Ha ganado el jugador 2</td>\n";
}
else{
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
    <p>Kaide</p>
  </footer>
</body>
</html>
