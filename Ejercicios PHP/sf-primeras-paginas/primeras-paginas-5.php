<?php
/**
 * Primeras páginas. Sin formularios. 5 - primeras-paginas-5.php
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
    num digital gráfico.
    Primeras páginas. Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>num digital gráfico</h1>

  <p>Actualice la página para mostrar un nuevo valor.</p>

<?php
$randomNumber = rand(1,6);
print " <p><img src=\"img/".$randomNumber.".svg\" \"alt=\"num\" width=\"140\" height=\"140\"></p>\n";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
