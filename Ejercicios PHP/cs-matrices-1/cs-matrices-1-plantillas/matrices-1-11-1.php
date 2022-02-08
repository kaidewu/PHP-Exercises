<?php
/**
 * Elimine dibujos - matrices-1-11-1.php
 *
 * @author Kaide Wu
 *
 */
session_name("matrices-1-11");
session_start();

if(!isset($_SESSION["emoji"])){
  for($i = 0; $i < 7; $i++){
    $_SESSION["emoji"][] = rand(128000, 128060);
  }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Elimine dibujos.
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
print "<h1> 7 dibujos, y quedaron ".count($_SESSION["emoji"])."</h1>\n";
print "  <p>Haga clic en un dibujo para eliminarlo.</p>\n";
print "  <form action=\"matrices-1-11-2.php\">\n";
print "    <p>\n";
foreach($_SESSION["emoji"] as $indice => $valor){
  print "      <button name=\"elimina\" value=\"$indice\" style=\"font-size: 400%\">\n";
  print "        &#$valor;\n";
  print "      </button>\n";
}
print "  </form>\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
