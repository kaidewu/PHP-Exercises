<?php
/**
 * Sesiones (1) 03 - sesiones-1-03-2.php
 *
 * @author Kaide Wu
 *
 */
session_name("sesion3-1");
session_start();
// FUNCIÓN DE RECOGIDA DE DATOS
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
$palabra = recoge('palabra');
$_SESSION["palabra"] = $palabra;

if ($palabra == ""){
    $_SESSION["error"] = " No ha escrito ninguna palabra";
}elseif(ctype_upper($palabra) == false){
    $_SESSION["error"] = " No ha escrito la palabra en mayúsculas";
}else{
    unset($_SESSION["error"]);
}
header("Location: sesiones-1-03-1.php");