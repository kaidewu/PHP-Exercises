<?php
/**
 * Sesiones (2) 11 - sesiones-2-11-2.php
 *
 * @author Kaide Wu
 *
 */
session_name("sesion2-11");
session_start();

if (!isset($_SESSION["cartas"])){
    header("Location: sesiones-2-11-1.php");
    exit;
  }

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
$quitar = recoge("quita");

if($quitar == "quita"){
    $_SESSION["cartas"] -= 1;
    if($_SESSION["cartas"] == -1){
        $_SESSION["cartas"] = rand(3, 10);
        header("Location: sesiones-2-11-1.php");
    }
    header("Location: sesiones-2-11-1.php");
}