<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Colores 3 (Formulario).
    Controles en formularios (1). Con formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Colores 3 (Formulario)</h1>

  <form action="controles-formularios-1-8-2.php" method="get">
    <p>Elija los colores a cambiar:<br>
      <label>Color de fondo de la página: <input type="color" name="fondo" value="#ffffff"></label><br>
      <label>Color de la letra de la página: <input type="color" name="letra" value="#000000">
    </p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
