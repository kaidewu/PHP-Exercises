<?php
/**
 * Menús 4 - comprobar.php
 *
 * @author Kaide Wu
 *
 */
session_name("conectar");
session_start();
if (!isset($_SESSION["conectar"])) {
    header("Location: index.php");
}

include "biblioteca.php";

cabecera("Comprobar");
if(isset($_SESSION["conectar"])){
    if($_SESSION["conectar"] == 1){
        print "<p>Usted se ha <strong>conectado</strong>.</p>\n";
    }elseif($_SESSION["conectar"] == 0){
        print "<p>Usted se ha <strong>desconectado</strong>.</p>\n";
    }
}else{
    header("Location: index.php");
}
pie();