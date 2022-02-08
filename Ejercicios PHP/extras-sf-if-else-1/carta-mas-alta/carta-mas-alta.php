<?php
/**
 * Cartas - cartas-mas-alta.php
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
    La carta más alta.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>La carta más alta</h1>

  <p>Actualice la página para mostrar otra partida.</p>

<?php
$num1 = rand(1, 10);
$num2 = rand(1, 10);
$paliza1 = $num1 - $num2;
$paliza2 = $num2 - $num1;

$feliz= '&#x1F603;';
$contento = '&#x1F60A;';
$neutro = '&#x1F610;';
$triste = '&#x1F61E;';
$llorando = '&#x1F62D;';


print "<table>\n";
print "    <tr>\n";
print "      <th colspan=\"2\">Jugador 1</th>\n";
print "      <th colspan=\"2\">Jugador 2</th>\n";
print "    </tr>\n";
print "    <tr>\n";
if ($num1 > $num2 && $paliza1 >= 5){
  print "      <td><span style=\"font-size: 7rem\">$feliz</span></td>\n";
}
elseif ($num1 > $num2 && $paliza1 < 5){
  print "      <td><span style=\"font-size: 7rem\">$contento</span></td>\n";
}
elseif($num1 == $num2){
  print "      <td><span style=\"font-size: 7rem\">$neutro</span></td>\n";
}
elseif($num1 < $num2 && $paliza2 < 5){
  print "      <td><span style=\"font-size: 7rem\">$triste</span></td>\n";
}
else{
  print "      <td><span style=\"font-size: 7rem\">$llorando</span></td>\n";
}
print "      <td><img src=\"img/c$num1.svg\" alt=\"9\" height=\"200\" /></td>\n";
print "      <td><img src=\"img/c$num2.svg\" alt=\"3\" height=\"200\" /></td>\n";
if ($num2 > $num1 && $paliza2 >= 5){
  print "      <td><span style=\"font-size: 7rem\">$feliz</span></td>\n";
}
elseif ($num2 > $num2 && $paliza2 < 5){
  print "      <td><span style=\"font-size: 7rem\">$contento</span></td>\n";
}
elseif($num2 == $num1){
  print "      <td><span style=\"font-size: 7rem\">$neutro</span></td>\n";
}
elseif($num2 < $num1 && $paliza1 < 5){
  print "      <td><span style=\"font-size: 7rem\">$triste</span></td>\n";
}
else{
  print "      <td><span style=\"font-size: 7rem\">$llorando</span></td>\n";
}
print "    </tr>\n";
print "  </table>\n";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
