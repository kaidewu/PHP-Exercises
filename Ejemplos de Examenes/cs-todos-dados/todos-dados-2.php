<?php
/**
 * Todos los dados - todos-dados-2.php
 *
 * @author Kaide Wu
 */
session_name("tododados");
session_start();
if (!isset($_SESSION["tiradas"])){
    header("Location: todos-dados-1.php");
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
$_SESSION["dados"] = rand(1, 6);
$siguiente = recoge("siguiente");

if ($siguiente == "Reiniciar"){
    $_SESSION["tiradas"] = 0;
    header("Location: todos-dados-1.php");
}else{
    $_SESSION["tiradas"] += 1;
    if ($_SESSION["dados"] == 1){
        $_SESSION["dado1"] = 1;
        $_SESSION["alt1"] = 1;
    }elseif ($_SESSION["dados"] == 2){
        $_SESSION["dado2"] = 2;
        $_SESSION["alt2"] = 2;
    }elseif ($_SESSION["dados"] == 3){
        $_SESSION["dado3"] = 3;
        $_SESSION["alt3"] = 3;
    }elseif ($_SESSION["dados"] == 4){
        $_SESSION["dado4"] = 4;
        $_SESSION["alt4"] = 4;
    }elseif ($_SESSION["dados"] == 5){
        $_SESSION["dado5"] = 5;
        $_SESSION["alt5"] = 5;
    }elseif ($_SESSION["dados"] == 6){
        $_SESSION["dado6"] = 6;
        $_SESSION["alt6"] = 6;
    }
    header("Location: todos-dados-1.php");
}