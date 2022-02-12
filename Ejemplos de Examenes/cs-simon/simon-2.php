<?php
/**
 * Simon 2 - simon-2.php
 *
 * @author Kaide Wu
 */
session_name("simon");
session_start();
if (!isset($_SESSION["aciertos"]) || !isset($_SESSION["fallos"])){
    header("Location: simon-1.php");
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

$eleccion = recoge("eleccion");

if ($eleccion == 'Reiniciar'){
    $_SESSION["aciertos"] = 0;
    $_SESSION["fallos"] = 0;
    $_SESSION["numero"] = rand(1, 4);
    header("Location: simon-1.php");
    exit;
}

if ($eleccion == $_SESSION["numero"]){
    $_SESSION["aciertos"] += 1;
    $_SESSION["numero"] = rand(1, 4);
    header("Location: simon-1.php");
    exit;
}elseif ($eleccion != $_SESSION["numero"]){
    $_SESSION["fallos"] += 1;
    header("Location: simon-1.php");
    exit;
}
