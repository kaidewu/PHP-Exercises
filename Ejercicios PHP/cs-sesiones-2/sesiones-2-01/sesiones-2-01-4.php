<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-4.php
 *
 * @author Kaide Wu
 *
 */
session_name("sesion2-1");
session_start();

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

$apellidos = recoge("apellidos");
$_SESSION["apellidos"] = $apellidos;

if($apellidos== ""){
    $_SESSION["error"] = " No ha escrito sus apellidos";
    header("Location: sesiones-2-01-3.php");
}else{
    unset($_SESSION["error"]);
    header("Location: sesiones-2-01-5.php");
}
