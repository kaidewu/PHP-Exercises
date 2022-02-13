<?php
/**
 * Tabla con casillas de verificación (Formulario) - matrices-2-1-1.php
 *
 * @author Kaide Wu
 *
 */
session_name("matrices-2-1-1");
session_start();
if (!isset($_SESSION["comprobacion"])){
  $_SESSION["comprobacion"] = 1;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tabla de una fila con casillas de verificación (Formulario).
    Matrices (2). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Tabla de una fila con casillas de verificación (Formulario)</h1>

  <p>Marque las casillas de verificación que quiera y contaré cuántas ha marcado.</p>

  <form action="matrices-2-1-2.php" method="get">
    <table class="conborde">
      <tbody>
        <tr>
<?php

$_SESSION["numRandom"] = rand(1, 20);
for ($i = 1; $i < $_SESSION["numRandom"]; $i++) {
  print "        <td><label><input type=\"checkbox\" name=\"c[$i]\"> $i</label></td>\n";
  $_SESSION["lista"][] = $i;
}

?>
        </tr>
      </tbody>
    </table>

    <p>
      <input type="submit" value="Contar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
