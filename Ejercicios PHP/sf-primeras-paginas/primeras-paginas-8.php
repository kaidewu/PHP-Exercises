<?php
/**
 * Primeras páginas. Sin formularios. 8 - primeras-paginas-8.php
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
    Emoticono.
    Primeras páginas. Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Emoticono</h1>

  <p>Actualice la página para mostrar otro emoticono.</p>

<?php

print " <p><span style=\"font-size: 100px;\">&#". rand(128512,128586) .";</span></p>";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
