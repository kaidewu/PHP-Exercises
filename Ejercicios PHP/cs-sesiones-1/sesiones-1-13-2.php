<?php
/**
 * Sesiones (1) 13 - sesiones-1-13-2.php
 *
 * @author Kaide Wu
 *
 */

session_name("sesion1-13");
session_start();
if(isset($_SESSION["numx"]) == false && isset($_SESSION["numy"]) == false){
    header("Location: sesiones-1-13-1.php");
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

if($accion == "centro"){
    $_SESSION["numx"] = 0;
    $_SESSION["numy"] = 0;
}elseif($accion == "izquierda"){
    $_SESSION["numx"] -= 20;
}elseif($accion == "derecha"){
    $_SESSION["numx"] += 20;
}elseif($accion == "arriba"){
    $_SESSION["numy"] -= 20;
}elseif($accion == "abajo"){
    $_SESSION["numy"] += 20;
}

if($_SESSION["numx"] == 200){
    $_SESSION["numx"] = -200;
}elseif($_SESSION["numy"] == -200){
    $_SESSION["numy"] = 200;
}

header("Location: sesiones-1-13-1.php");