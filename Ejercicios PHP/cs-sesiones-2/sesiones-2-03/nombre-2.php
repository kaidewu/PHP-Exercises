<?php
/**
 * Sesiones (2) 03 - nombre-2.php
 *
 * @author Kaide Wu
 *
 */
session_name("sesion2-3");
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

$nombre = recoge("nombre");

if($nombre == ""){
    $_SESSION["error"] = " No ha escrito su nombre";
    header("Location: nombre-1.php");
}else{
    unset($_SESSION["error"]);
    $_SESSION["nombre"] = $nombre;
    header("Location: index.php");
}
