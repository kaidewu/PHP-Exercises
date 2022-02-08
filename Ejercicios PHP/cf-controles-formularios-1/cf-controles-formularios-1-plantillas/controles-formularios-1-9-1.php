<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dibuja cuadrado 3 (Formulario).
    Controles en formularios (1). Con formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dibuja cuadrado 3 (Formulario)</h1>

  <form action="controles-formularios-1-9-2.php" method="get">
    <p><label>Escriba el tamaño: <input type="number" name="ancho" min="5" value="50" autofocus></label></p>

    <p><label>Escriba el grosor del borde: <input type="number" name="grosor" min="1" value="6"></label></p>

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
