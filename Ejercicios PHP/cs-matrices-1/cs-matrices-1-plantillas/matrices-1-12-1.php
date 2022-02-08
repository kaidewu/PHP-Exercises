<?php
/**
 * Seleccione dibujos - matrices-1-12-1.php
 *
 * @author Kaide Wu
 *
 */
session_name("matrices-1-12");
session_start();

if(!isset($_SESSION["emoji"])){
  for($i = 0; $i < 7; $i++){
    $_SESSION["emoji"][] = rand(128512, 128567);
  }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Seleccione dibujos.
    foreach (1). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
  <style>
    button { background-color: hsl(240, 100%, 98%); padding: 0; border: none;}
  </style>
</head>

<body>
<?php

print "<h1>7 dibujos para seleccionar</h1>\n";
print "  <p>Haga clic en un dibujo para seleccionarlo.</p>\n";

print "  <h2>Dibujos disponibles</h2>\n";
print "  <form action=\"matrices-1-12-2.php\">\n";
print "    <p>\n";
foreach($_SESSION["emoji"] as $indice => $valor){
  print "      <button name=\"elimina\" value=\"$indice\" style=\"font-size: 400%\">\n";
  print "        &#$valor;\n";
  print "      </button>\n";
}
print "  </form>\n";

print "  <h2>Dibujos seleccionados</h2>\n";
print "  <p style=\"font-size: 400%; line-height: 25%;\">\n";
if(isset($_SESSION["selecciona"])){
  foreach($_SESSION["selecciona"] as $valor){
    print "&#$valor";
  }
}
print "  </p>\n";

?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
