<?php
/**
 * Primeras páginas. Sin formularios. 4 - primeras-paginas-4.php
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
    num digital.
    Primeras páginas. Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>num digital</h1>

  <p>Actualice la página para mostrar un nuevo valor.</p>

<?php
$randomNumber = rand(0,9);
print "  <p><span style=\"border: black 2px solid; padding: 10px; font-size: 300%\">$randomNumber</span></p>\n";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
