<?php
/**
 * Sesiones (1) 14 - sesiones-1-14-2.php
 *
 * @author Kaide Wu
 *
 */

session_name("sesion1-14");
session_start();
if(isset($_SESSION["a"]) == false && isset($_SESSION["b"]) == false){
    header("Location: sesiones-1-14-1.php");
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

if($accion == "cero"){
    $_SESSION["a"] = 0;
    $_SESSION["b"] = 0;
}elseif($accion == "a"){
    $_SESSION["a"] += 10;
}elseif($accion == "b"){
    $_SESSION["b"] += 10;
}
header("Location: sesiones-1-14-1.php");