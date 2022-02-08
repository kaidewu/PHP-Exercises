<?php
/**
 * Menús 3 - pagina-3-2.php
 *
 * @author Kaide Wu
 *
 */
include "biblioteca.php";
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
$confimacion = recoge("no");

if($confimacion != "No"){
    $texto = "Tercera página - Confirmado";
    cabecera($texto, $menu);
    print "<p>Ha llegado usted a la tercera página</p>\n";
    pie();
}else{
    header("Location: index.php");
}
