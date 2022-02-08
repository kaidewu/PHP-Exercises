<?php
/**
 * Hoja de estilo  - cabeceras-11-css.php
 *
 * @author Kaide Wu
 *
 */
header("Content-type: text/css");
$color = rand(0, 360);
$tamaño = rand(1*10, 3*10) / 10;

print "body {\n";
print "  background-color: hsl($color, 100%, 80%);\n";
print "  font-family: sans-serif;\n";
print "  font-size:  ".$tamaño."rem;\n";
print "}\n";

print "h1 {\n";
print "  padding: 0 10px 5px;\n";
print "  border-radius: 10px;\n";
print "  background-color: hsl($color, 100%, 30%);\n";
print "  color: hsl($color, 100%, 60%);\n";
print "}\n";

?>

footer {
  border-top: black 1px solid;
  margin-top: 2em;
}
