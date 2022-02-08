<?php
/**
 * Matrices (1) 3 - matrices-1-03.php
 *
 * @author Kaide Wu
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Nombres de animales.
    Matrices (1). Sin formularios.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Nombres de animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php
$random = rand(0, 19);

$lista = [
  "Ballena", "Caballito-mar", "Camello", "Cebra", "Elefante",
  "Hipopotamo", "Jirafa", "Leon", "Leopardo", "Medusa",
  "Mono", "Oso", "Oso-blanco", "Pajaro", "Pinguino",
  "Rinoceronte", "Serpiente", "Tigre", "Tortuga-marina", "Tortuga"
];
$animales = [
  "Ballena", "Caballito de mar", "Camello", "Cebra", "Elefante",
  "Hipopótamo", "Jirafa", "León", "Leopardo", "Medusa",
  "Mono", "Oso", "Oso blanco", "Pájaro", "Pingüino",
  "Rinoceronte", "Serpiente", "Tigre", "Tortuga marina", "Tortuga"
];

print "  <h2>$animales[$random]</h2>\n";
print "\n";
print "  <p><img src=\"img/animales/$lista[$random].svg\" alt=\"Oso\" height=\"250\"></p>\n";


?>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>

