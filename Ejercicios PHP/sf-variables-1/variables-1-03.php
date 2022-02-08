<?php
/**
 * Variables. Sin formularios.(1) 3 - variables-1-03.php
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
    Tirada de nums.
    Variables. Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Tirada de nums</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$randomNumber = rand(1,6);
$randomNumber2 = rand(1,6);
$TotalNum = $randomNumber + $randomNumber2;
print " <p><img src=\"img/".$randomNumber.".svg\" \"alt=\"num\" width=\"140\" height=\"140\">
<img src=\"img/".$randomNumber2.".svg\" \"alt=\"num\" width=\"140\" height=\"140\">
</p>\n";

print "<p>Total: <span style=\"border: black 2px solid; padding: 10px; font-size: 300%\">". $TotalNum ."</span></p>
";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
