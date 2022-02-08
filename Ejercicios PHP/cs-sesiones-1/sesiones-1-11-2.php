<?php
/**
 * Sesiones (1) 11 - sesiones-1-11-2.php
 *
 * @author Kaide Wu
 *
 */

session_name("sesion1-11");
session_start();
if(isset($_SESSION["num"]) == false){
    header("Location: sesiones-1-11-1.php");
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

if ($accion == "cero"){
    $_SESSION["num"] = 0;
}elseif($accion == "subir"){
    $_SESSION["num"]++;
}elseif($accion == "bajar"){
    $_SESSION["num"]--;
}

header("Location: sesiones-1-11-1.php");
