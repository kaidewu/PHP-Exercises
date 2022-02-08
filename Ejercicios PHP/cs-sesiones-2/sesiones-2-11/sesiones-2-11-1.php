<?php
/**
 * Sesiones (2) 11 - sesiones-2-11-1.php
 *
 * @author Kaide Wu
 *
 */
session_name("sesion2-11");
session_start();
if (!isset($_SESSION["cartas"])){
  $_SESSION["cartas"] = rand(3, 10);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Quita cartas.
    Sesiones (2). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Quita cartas</h1>

<?php

print "<p>Queda $_SESSION[cartas] cartas. Haga clic en el dibujo para eliminar una carta.</p>\n";


?>

  <form action="sesiones-2-11-2.php">
    <p>
      <button type="submit" name="quita" value="quita" style="background-color: #eee;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
          width="210" height="250" viewBox="-10 -10 210 250">
          <defs>
            <pattern id="patron-1" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse" >
              <rect x="0" y="0" width="10" height="10" fill="hsl(0, 100%, 80%)" />
              <line x1="0" y1="10" x2="10" y2="0" stroke="hsl(0, 100%, 90%)" stroke-width="1" />
              <line x1="0" y1="0" x2="10" y2="10" stroke="hsl(0, 100%, 90%)" stroke-width="1" />
            </pattern>
          </defs>

<?php

for($i = 0; $i < $_SESSION["cartas"]; $i++){
  print "<rect x=\"".($i * 10)."\" y=\"".($i * 10)."\" width=\"100\" height=\"140\" rx=\"5\" ry=\"5\" style=\"stroke: black; fill: url(#patron-1);\" />\n";
}

?>
        </svg>
      </button>
    </p>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
