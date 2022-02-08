<?php
/**
 * Sesiones (1) 12 - sesiones-1-12-2.php
 *
 * @author Kaide Wu
 *
 */

session_name("sesion1-12");
session_start();
if(isset($_SESSION["num"]) == false){
    header("Location: sesiones-1-12-1.php");
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

if($accion == "cetro"){
    $_SESSION["num"] = 0;
}elseif($accion == "izquierda"){
    $_SESSION["num"] -= 20;
}elseif($accion == "derecha"){
    $_SESSION["num"] += 20;
}
if($_SESSION["num"] == 300){
    $_SESSION["num"] = -300;
}

header("Location: sesiones-1-12-1.php");