<?php
/**
 * Primeras páginas. Sin formularios. 7 - primeras-paginas-7.php
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
    Saludo.
    Primeras páginas. Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Saludo</h1>

  <p>Actualice la página para cambiar el tamaño del saludo.</p>

<?php

print "<p> <span style=\"border: black 2px solid; padding: 10px; font-size: " . rand(200, 800) . "%;\">¡Hola!</span></p>\n";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
