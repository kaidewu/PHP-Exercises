<?php
/**
 * Solitario - solitario-2.php
 *
 * @author Kaide Wu
 *
 */
session_name("solitario");
session_start();
if (!isset($_SESSION["puntos"])){
    header("Location: solitario-1.php");
    exit;
}

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

$accion = recoge("accion");

if ($accion == 'sacar'){
    $_SESSION["cartas"] = rand(1, 10);
    $_SESSION["puntos"] += $_SESSION["cartas"];
    if ($_SESSION["cartas"] == 10){
        $_SESSION["puntos"] = 0;
        header("Location: solitario-1.php");
    }
    header("Location: solitario-1.php");
}elseif ($accion == "empezar"){
    $_SESSION["puntos"] = 0;
    header("Location: solitario-1.php");
}