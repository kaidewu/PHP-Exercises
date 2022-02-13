<?php
/**
 * Trío de cartas - trio-cartas-2.php
 *
 * @author Escriba aquí su nombre
 */
session_name("triocartas");
session_start();
if (!isset($_SESSION["cambios"])){
    header("Location: trio-cartas-1.php");
    exit;
}
 # Funcion recoge los datos
function recoge($var, $m = "")
{
      if (!isset($_REQUEST[$var])) {
          $tmp = (is_array($m)) ? [] : "";
      } elseif (!is_array($_REQUEST[$var])) {
          $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
      } else {
          $tmp = $_REQUEST[$var];
          array_walk_recursive($tmp, function (&$valor) {
              $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
          });
      }
      return $tmp;
}

$cambia = recoge("cambia");

if ($cambia == 0){
    $_SESSION["cambios"] = 0;
    $_SESSION["cartas1"] = rand(1, 10);
    $_SESSION["cartas2"] = rand(1, 10);
    $_SESSION["cartas3"] = rand(1, 10);
    header("Location: trio-cartas-1.php");
}elseif ($cambia == 1){
    $_SESSION["cartas1"] = rand(1, 10);
    $_SESSION["cambios"] += 1;
    header("Location: trio-cartas-1.php");
}elseif ($cambia == 2){
    $_SESSION["cartas2"] = rand(1, 10);
    $_SESSION["cambios"] += 1;
    header("Location: trio-cartas-1.php");
}elseif ($cambia == 3){
    $_SESSION["cartas3"] = rand(1, 10);
    $_SESSION["cambios"] += 1;
    header("Location: trio-cartas-1.php");
}