<?php
/**
 * Menús 5 - index.php
 *
 * @author Kaide Wu
 *
 */
session_name("menu5");
session_start();
if(!isset($_SESSION["conectado"])){
    $_SESSION["conectado"] = 0;
}
include "biblioteca.php";
cabecera("Inicio");
if($_SESSION["conectado"] == 0){
    print "<p>Está usted <strong>desconectado</strong>.</p>\n";
}elseif($_SESSION["conectado"] == 1){
    print "<p>Está usted <strong>conectado</strong>.</p>\n";
}
pie();
