<?php
/**
 * Sesiones (2) 13 - sesiones-2-13-2.php
 *
 * @author Kaide Wu
 *
 */
session_name("sesion2-13");
session_start();
if (!isset($_SESSION["A"]) &&!isset($_SESSION["B"])  ){
    header("Location: sesiones-2-13-1.php");
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
$siguiente = recoge("siguiente");

if($siguiente == "Lanzar moneda"){
    if($_SESSION["moneda"] == 0){
        $_SESSION["A"] += 1;
    }else{
        $_SESSION["B"] += 1;
    }
    header("Location: sesiones-2-13-1.php");
}elseif($siguiente == "Volver a empezar"){
    $_SESSION["A"] = 0;
    $_SESSION["B"] = 0;
    unset($_SESSION["moneda"]);
    header("Location: sesiones-2-13-1.php");
}