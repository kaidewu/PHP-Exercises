<?php
/**
 * Sesiones (1) 02 - sesiones-1-02-2.php
 *
 * @author Kaide Wu
 *
 */
session_name("sesion2-1");
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
$texto = recoge('texto');

if ($texto == ""){
    header("Location: sesiones-1-02-1.php");
}else{
    $_SESSION["texto"] = $texto;
    header("Location: sesiones-1-02-1.php");
}