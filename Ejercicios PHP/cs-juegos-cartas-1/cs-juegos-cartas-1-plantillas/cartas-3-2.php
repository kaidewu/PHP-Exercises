<?php
/**
 *
 * @author Kaide Wu
 */

session_name("cartas-3");
session_start();

if(!isset($_SESSION["cartas"])){
    header("Location: cartas-3-1.php");
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

$accion = recoge("accion");

if($accion == "otra"){
    $rancarta = array_rand($_SESSION["baraja"]);
    $_SESSION["cartas"][] = $_SESSION["baraja"][$rancarta];
    unset($_SESSION["baraja"][$rancarta]);
    header("Location: cartas-3-1.php");
}

if($accion == "reiniciar"){
    session_unset();
    header("Location: cartas-3-1.php");
}
?>
