<?php
/**
 * Sesiones (1) 12 - sesiones-1-12-1.php
 *
 * @author Kaide Wu
 *
 */

session_name("sesion1-12");
session_start();
if (isset($_SESSION["num"]) == false) {
    $_SESSION["num"] = 0;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Mover un punto a derecha e izquierda.
    Sesiones (1). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Mover un punto a derecha e izquierda</h1>

  <form action="sesiones-1-12-2.php" method="get">
    <p>Haga clic en los botones para mover el punto:</p>

    <table>
      <tr>
        <th>
          <button type="submit" name="accion" value="izquierda" style="font-size: 60px; line-height: 40px;">&#x261C;</button>
          <button type="submit" name="accion" value="derecha" style="font-size: 60px; line-height: 40px;">&#x261E;</button>
        <th>
      </tr>
      <tr>
        <th>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            width="600" height="20" viewbox="-300 0 600 20">
            <line x1="-300" y1="10" x2="300" y2="10" stroke="black" stroke-width="5" />
<?php

print "<circle cx=\"$_SESSION[num]\" cy=\"10\" r=\"8\" fill=\"red\" />\n";

?>
          </svg>
        </th>
      </tr>
    </table>

    <p>
      <button type="submit" name="accion" value="centro">Volver al centro</button>
    </p>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
