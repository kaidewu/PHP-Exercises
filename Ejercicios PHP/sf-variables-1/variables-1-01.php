<?php
/**
 * Variables. Sin formularios.(1) 1 - variables-1-01.php
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
    Línea.
    Variables. Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Línea</h1>
  <p>Actualice la página para mostrar una nueva línea.</p>
<?php
$randomNum = rand(10, 1000);

print "<p>Longitud: " . $randomNum ."</p>";

print "<p>
    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
      width=" . $randomNum ."px\" height=\"10px\">
      <line x1=\"1\" y1=\"5\" x2=" . $randomNum ." y2=\"5\" stroke=\"black\" stroke-width=\"10\" />
    </svg>
  </p>";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
