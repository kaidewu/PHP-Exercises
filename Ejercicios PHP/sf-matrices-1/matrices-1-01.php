<?php
/**
 * Matrices (1) 1 - matrices-1-01.php
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
    Dado.
    Matrices (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dado</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$dado = ["uno", "dos", "tres", "cuatro", "cinco", "seis"];
$random = rand(1, 6);
print "  <p><img src=\"img/$random.svg\" alt=\"$random\" width=\"140\" height=\"140\"></p>\n";
print "\n";
$num  = $random - 1;
print "  <p>Ha sacado un <strong>$dado[$num]</strong>.</p>\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
