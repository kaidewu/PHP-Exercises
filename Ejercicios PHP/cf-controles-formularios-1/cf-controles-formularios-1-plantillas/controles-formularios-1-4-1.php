<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Fruta preferida 1 (Formulario).
    Controles en formularios (1). Con formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Fruta preferida 1 (Formulario)</h1>

  <form action="controles-formularios-1-4-2.php" method="get">
    <p>Indique su fruta preferida:<br>
      <label><input type="radio" name="fruta" value="la cereza"> Cereza</label><br>
      <label><input type="radio" name="fruta" value="la fresa"> Fresa</label><br>
      <label><input type="radio" name="fruta" value="el limón"> Limón</label><br>
      <label><input type="radio" name="fruta" value="la manzana"> Manzana</label><br>
      <label><input type="radio" name="fruta" value="la naranja"> Naranja</label><br>
      <label><input type="radio" name="fruta" value="la pera"> Pera</label>
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
