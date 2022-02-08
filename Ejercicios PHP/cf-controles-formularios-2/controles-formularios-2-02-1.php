<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 2 (Formulario).
    Controles en formularios (2). Con formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 2 (Formulario)</h1>

  <form action="controles-formularios-2-02-2.php" method="get">
    <p><label>Escriba su edad: <input type="number" name="edad" min="5" max="130"></label></p>

    <p><label>Escriba su peso: <input type="number" name="peso" step="0.1" min="10" max="150"></label></p>

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
