<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Colores 1 (Formulario).
    Controles en formularios (1). Con formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Colores 1 (Formulario)</h1>

  <form action="controles-formularios-1-6-2.php" method="get">
    <p>Elija los colores a cambiar:<br>
      <label><input type="checkbox" name="fondo" value="el color del fondo"> Color del fondo de la página</label><br>
      <label><input type="checkbox" name="letra" value="el color de la letra"> Color de la letra de la página</label>
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
