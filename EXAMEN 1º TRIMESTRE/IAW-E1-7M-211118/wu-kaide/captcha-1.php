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
    Captcha (Formulario).
    Con formularios.
    Exámenes. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Captcha (Formulario)</h1>

  <form action="captcha-2.php" method="get">
<?php
$transporte = [128640, 128641, 128642, 128652, 128657, 128663, 128668 , 128690, 128756];
$numRandom = rand(0, count($transporte) - 1);
$valorCorrecto = $transporte[$numRandom];
// Emoji de transporte aleatorio
print "<p>Haga clic en el siguiente dibujo: <span style=\"font-size: 400%;\">&#$valorCorrecto;</span></p>\n";

// Botones de los emojis de transporte aletorios
print "<table>\n";
print "      <tbody>\n";
for ($i = 0; $i < 3; $i++) {
    print "        <tr>\n";
    for ($j = 0; $j < 3; $j++) {
      $Norepeat = [128640, 128641, 128642, 128652, 128657, 128663, 128668 , 128690, 128756];
        $contar = count($Norepeat);
        if ($contar == 1) {
            $aleatorio = rand(0, 1);
        } elseif ($contar == 0) {
            $aleatorio = 0;
        } else {
            $aleatorio = rand(0, $contar - 1);
        }
        print "          <td><button type=\"submit\" name=\"elegido\" value=\"$Norepeat[$aleatorio]\" style=\"font-size: 400%;\">&#$Norepeat[$aleatorio];</button></td>\n";
        unset($Norepeat[$aleatorio]);

    }
    print "        </tr>\n";
}
print "      </tbody>\n";
print "    </table>\n";

// Valor secreto
print "<p><input type=\"hidden\" name=\"secreto\" value=\"$valorCorrecto\"></p>\n";


?>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
