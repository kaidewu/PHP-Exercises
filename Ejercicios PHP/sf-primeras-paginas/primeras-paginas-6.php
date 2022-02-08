<?php
/**
 * Primeras páginas. Sin formularios. 6 - primeras-paginas-6.php
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
    Código de color.
    Primeras páginas. Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Código de color</h1>

  <p>Actualice la página para mostrar un nuevo valor.</p>

<?php
print "<p>Color: rgb(" . rand(0,255) . ", " . rand(0,255) . ", " . rand(0,255) . ")</p>\n";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
