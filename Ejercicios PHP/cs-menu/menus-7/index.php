<?php
/**
 * Menús 7 - index.php
 *
 * @author Kaide Wu
 *
 *
 */
include "biblioteca.php";
session_name("menu7");
session_start();
if(!isset($_SESSION["conectado"])){
    $_SESSION["conectado"] = 0;
}
cabecera("Inicio");
pie();