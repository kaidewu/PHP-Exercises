<?php
/**
 *
 * @author Kaide Wu
 */

print "<!-- Ejercicio incompleto -->\n";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Muestra cartas.
    Juegos de cartas (1).. Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Muestra cartas</h1>

  <form action="cartas-5-2.php" method="get">
    <p>Haga clic en los botones para mostrar una carta más, una carta menos o reiniciar:</p>

    <p>
      <button type="submit" name="accion" value="menos"><span style="font-size: 4rem">&#x2796;</span></button>
      <button type="submit" name="accion" value="reiniciar"><span style="font-size: 4rem">&#x274c;</span></button>
      <button type="submit" name="accion" value="mas"><span style="font-size: 4rem">&#x2795;</span></button>
    </p>

<?php

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>

