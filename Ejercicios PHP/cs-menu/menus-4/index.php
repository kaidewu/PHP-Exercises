<?php
/**
 * Menús 4 - index.php
 *
 * @author Kaide Wu
 *
 */
session_name("conectar");
session_start();
if(!isset($_SESSION["conectar"])){
    $_SESSION["conectar"] = 0;
}

include "biblioteca.php";

cabecera("Inicio");
pie();
