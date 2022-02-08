<?php
/**
 *
 * @author Kaide Wu
 */

session_name("cartas-3");
session_start();

if(!isset($_SESSION["cartas"])){
    header("Location: cartas-3-1.php");
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

$accion = recoge("accion");

if($accion == "otra"){
    if($_SESSION["puntuacion"] < 7.5){
        $letra = $_SESSION["letras"][array_rand($_SESSION["letras"])];
        $num = $_SESSION["numeros"][array_rand($_SESSION["numeros"])];
        $_SESSION["cartas"][] = "$letra$num";
        if ($num == 1) {
            $_SESSION['puntuacion'] += 1;
        } elseif ($num == 2) {
            $_SESSION['puntuacion'] += 2;
        } elseif ($num == 3) {
            $_SESSION['puntuacion'] += 3;
        } elseif ($num == 4) {
            $_SESSION['puntuacion'] += 4;
        } elseif ($num == 5) {
            $_SESSION['puntuacion'] += 5;
        } elseif ($num == 6) {
            $_SESSION['puntuacion'] += 6;
        } elseif ($num == 7) {
            $_SESSION['puntuacion'] += 7;
        }elseif ($num == 11) {
            $_SESSION['puntuacion'] += 0.5;
        } elseif ($num == 12) {
            $_SESSION['puntuacion'] += 0.5;
        } elseif ($num == 13) {
            $_SESSION['puntuacion'] += 0.5;
        }
        unset($_SESSION["baraja"][$rancarta]);
        header("Location: cartas-3-1.php");
    }
    elseif($_SESSION["puntuacion"] == 7.5 || $_SESSION["puntuacion"] > 7.5){
        header("Location: cartas-3-1.php");
    }
}

if($accion == "reiniciar"){
    session_unset();
    header("Location: cartas-3-1.php");
}
?>
