<?php
/**
 * Elimine dibujos en orden - matrices-1-13-2.php
 *
 * @author Kaide Wu
 *
 */
session_name("matrices-1-13");
session_start();

if(!isset($_SESSION["emoji"])){
    header("Location: matrices-1-13-1.php");
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

$elimina = recoge("elimina");

if($_SESSION["guardar"] != $_SESSION["emoji"][$elimina]){
    header("Location: matrices-1-13-1.php");
}else{
    unset($_SESSION["emoji"][$elimina]);
    if($_SESSION["emoji"] != []){
        $_SESSION["guardar"] = $_SESSION["emoji"][array_rand($_SESSION["emoji"])];
    }
}

if($_SESSION["emoji"] == []){
    session_unset();
}

header("Location: matrices-1-13-1.php");