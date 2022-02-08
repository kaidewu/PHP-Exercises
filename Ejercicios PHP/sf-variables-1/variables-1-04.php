<?php
/**
 * Variables. Sin formularios.(1) 4 - variables-1-04.php
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
    La carta más alta.
    Variables. Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>La carta más alta</h1>

  <p>Actualice la página para mostrar un nuevo trío de cartas.</p>

<?php
$Num = rand(1,6);
$Num2 = rand(1,6);
$Num3 = rand(1,6);
$maximo = max($Num, $Num2, $Num3);

print "<p>
  <img src=\"img/c".$Num.".svg\" alt=".$Num." height=\"200\">
  <img src=\"img/c".$Num2.".svg\" alt=".$Num2." height=\"200\">
  <img src=\"img/c".$Num3.".svg\" alt=".$Num3." height=\"200\">
</p>";

print "<p>La carta más alta es un <strong>".$maximo."</strong>.</p>";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
