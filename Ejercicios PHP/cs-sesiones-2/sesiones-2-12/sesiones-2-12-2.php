<?php
/**
 * Sesiones (2) 12 - sesiones-2-12-2.php
 *
 * @author Kaide Wu
 *
 */
session_name("sesion2-12");
session_start();
if (!isset($_SESSION["hucha"])){
    header("Location: sesiones-2-12-1.php");
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

$moneda = recoge("moneda");
$vaciar = recoge("accion");

if($vaciar == "Vaciar hucha"){
    $_SESSION["hucha"] = 0;
    header("Location: sesiones-2-12-1.php");
}elseif($moneda == "0.01"){
    $_SESSION["hucha"] += 0.01;
    header("Location: sesiones-2-12-1.php");
}elseif($moneda == "0.02"){
    $_SESSION["hucha"] += 0.02;
    header("Location: sesiones-2-12-1.php");
}elseif($moneda == "0.05"){
    $_SESSION["hucha"] += 0.05;
    header("Location: sesiones-2-12-1.php");
}elseif($moneda == "0.1"){
    $_SESSION["hucha"] += 0.1;
    header("Location: sesiones-2-12-1.php");
}elseif($moneda == "0.2"){
    $_SESSION["hucha"] += 0.2;
    header("Location: sesiones-2-12-1.php");
}elseif($moneda == "0.5"){
    $_SESSION["hucha"] += 0.5;
    header("Location: sesiones-2-12-1.php");
}elseif($moneda == "1"){
    $_SESSION["hucha"] += 1;
    header("Location: sesiones-2-12-1.php");
}elseif($moneda == "2"){
    $_SESSION["hucha"] += 2;
    header("Location: sesiones-2-12-1.php");
}