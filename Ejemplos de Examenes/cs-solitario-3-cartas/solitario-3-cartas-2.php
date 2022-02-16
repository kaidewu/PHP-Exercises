<?php
/**
 * Solitario de tres carta- solitario-3-cartas-2.php
 *
 * @author Kaide Wu
 *
 */
session_name("solitario-3");
session_start();
if (!isset($_SESSION["puntos"])){
    header("Location: solitario-3-cartas-1.php");
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

if ($accion == "nueva"){
    $_SESSION["puntos"] = 0;
    $_SESSION["cambios"] = 3;
    $_SESSION["carta1"] = rand(1, 10);
    $_SESSION["carta2"] = rand(1, 10);
    $_SESSION["carta3"] = rand(1, 10);
    header("Location: solitario-3-cartas-1.php");
}
elseif ($_SESSION["cambios"] == 0){
    header("Location: solitario-3-cartas-1.php");
}
elseif ($accion == "terminar"){
    $_SESSION["cambios"] = 0;
    header("Location: solitario-3-cartas-1.php");
}
elseif ($accion == "carta1"){
    $_SESSION["cambios"] -= 1;
    $_SESSION["puntos"] += $_SESSION["carta1"];
    $_SESSION["carta1"] = rand(1, 10);
    header("Location: solitario-3-cartas-1.php");
}
elseif ($accion == "carta2"){
    $_SESSION["cambios"] -= 1;
    $_SESSION["puntos"] += $_SESSION["carta2"];
    $_SESSION["carta2"] = rand(1, 10);
    header("Location: solitario-3-cartas-1.php");
}
elseif ($accion == "carta3"){
    $_SESSION["cambios"] -= 1;
    $_SESSION["puntos"] += $_SESSION["carta3"];
    $_SESSION["carta3"] = rand(1, 10);
    header("Location: solitario-3-cartas-1.php");
}