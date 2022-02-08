<?php
/**
 * Matrices (1) 5 - matrices-1-05.php
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
    Hombres y mujeres haciendo deporte.
    Matrices (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Hombres y mujeres haciendo deporte</h1>

  <p>Actualice la página para mostrar un nuevo dibujo.</p>

<?php
$emoji = [127939, 127940, 127946, 128675, 128692, 128693, 128694, 129336, 129337, 129341, 129342, 129495];
$nombre = ["corriendo", "surfeando", "nadando", "remando", "pedaleando", "pedaleando en la montaña", "caminando", "dando volteretas", "haciendo malabares", "jugando al waterpolo", "jugando al balonmano", "escalando"];

$genero = [9792, 9794];
$ranGen = rand(0, 1);
$randomGenero = $genero[$ranGen];

$random = rand(0, (count($emoji) - 1));

if ($randomGenero == 9794){
  print "<h2>Hombre $nombre[$random]</h2>\n";
}
else{
  print "<h2>Mujer $nombre[$random]</h2>\n";
}

print "\n";
print "  <p><span style=\"font-size: 800%\">&#$emoji[$random];&#8205;&#$randomGenero;&#65039;</span></p>\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>

