<?php
/**
 * Sesiones (2) 01 - sesiones-2-02-2.php
 *
 * @author Kaide Wu
 *
 */

session_name("sesion2-2");
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

$palabra1 = recoge("palabra1");

if ($palabra1 == "") {
    $_SESSION["error"] = " No ha escrito nada";
    header("Location: sesiones-2-02-1.php");
}elseif(!ctype_alnum($palabra1)){
    $_SESSION["error"] = " No ha escrito una sola palabra con letras y números";
    header("Location: sesiones-2-02-1.php");
}elseif(!ctype_graph($palabra1)){
    $_SESSION["error"] = " No ha escrito una sola palabra con letras y números";
    header("Location: sesiones-2-02-1.php");
}else{
    unset($_SESSION["error"]);
    $_SESSION["palabra1"] = $palabra1;
    header("Location: sesiones-2-02-3.php");
}
