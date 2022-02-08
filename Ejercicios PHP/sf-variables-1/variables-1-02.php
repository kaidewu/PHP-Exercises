<?php
/**
 * Variables. Sin formularios.(1) 2 - variables-1-02.php
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
    Círculo de color.
    Variables. Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Círculo de color</h1>

  <p>Actualice la página para mostrar un nuevo círculo.</p>

<?php
$Random1 = rand(0, 255);
$Random2 = rand(0, 255);
$Random3 = rand(0, 255);

print "<p>Color: rgb(" . $Random1 . ", " . $Random2 . ", " . $Random3 . ")</p>\n";


print "<p>
    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
      width=\"100\" height=\"100\">
      <circle cx=\"50\" cy=\"50\" r=\"50\" fill=\"rgb(" . $Random1 . ", " . $Random2 . ", " . $Random3 . ")\"/>
    </svg>
  </p> \n";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
