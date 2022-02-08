<?php
/**
 * Sesiones (1) 04 - sesiones-1-04-2.php
 *
 * @author Kaide Wu
 *
 */
// FUNCIÓN DE RECOGIDA DE DATOS
session_name("sesion1-04");
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
$minus = recoge("minusculas");
$mayus = recoge("mayusculas");
$_SESSION["mayus"] = $mayus;
$_SESSION["minus"] = $minus;

if($mayus == ""){
    $_SESSION["mayusNO"] = " No ha escrito ninguna palabra ";
}elseif(ctype_upper($mayus) == false){
    $_SESSION["mayusNO"] = " No ha escrito la palabra en mayúscula";
}else{
    unset($_SESSION["mayusNO"]);
}

if($minus == ""){
    $_SESSION["minusNO"] = " No ha escrito ninguna palabra ";
}elseif(ctype_lower($minus) == false){
    $_SESSION["minusNO"] = " No ha escrito la palabra en mayúscula";
}else{
    unset($_SESSION["mayusNO"]);
}

 header("Location: sesiones-1-04-1.php");