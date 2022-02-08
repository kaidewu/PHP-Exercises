<?php
/**
 * Sesiones (2) 13 - sesiones-2-13-1.php
 *
 * @author Kaide Wu
 *
 */
session_name("sesion2-13");
session_start();
if (!isset($_SESSION["A"]) && !isset($_SESSION["B"]) ){
  $_SESSION["A"] = 0;
  $_SESSION["B"] = 0;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Cara o cruz.
    Sesiones (2). Sesiones.
    Kaide Wu
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cara o cruz</h1>

  <p>Haga clic en uno de los botones:</p>

  <form action="sesiones-2-13-2.php">
    <p>
      <input type="submit" name="siguiente" value="Lanzar moneda">
      <input type="submit" name="siguiente" value="Volver a empezar">
    </p>
  </form>

  <table style="text-align: center;">
    <tr>
      <th>Jugador A</th>
      <th>Resultado</th>
      <th>Jugador B</th>
    </tr>
<?php
$_SESSION["moneda"]= rand(0, 1);

print "     <tr style=\"font-size: 400%\">\n";
print "      <td>$_SESSION[A]</td>\n";
print "      <td></td>\n";
print "      <td>$_SESSION[B]</td>\n";
print "    </tr>\n";
print "    <tr style=\"font-size: 400%\">\n";
if($_SESSION["A"] > $_SESSION["B"]){
  print "      <td>&#128568;</td>\n";
}elseif($_SESSION["A"] < $_SESSION["B"]){
  print "      <td>&#128576;</td>\n";
}else{
  print "      <td>&#128572;</td>\n";
}

if($_SESSION["A"] != 0 || $_SESSION["B"] != 0){
  if($_SESSION["moneda"] == 0){
    print "<td><img src=\"img/a.svg\" alt=\"A\" width=\"100\" height=\"100\"></td>\n";
  }else{
    print "<td><img src=\"img/b.svg\" alt=\"B\" width=\"100\" height=\"100\"></td>\n";
  }
}else{
  print "<td></td>\n";
}

if($_SESSION["B"] > $_SESSION["A"]){
  print "      <td>&#128053;</td>\n";
}elseif($_SESSION["B"] < $_SESSION["A"]){
  print "      <td>&#128584;</td>\n";
}else{
  print "      <td>&#128586;</td>\n";
}
print "    </tr>\n";

?>
  </table>

  <footer>
    <p>Kaide Wu</p>
  </footer>
</body>
</html>
