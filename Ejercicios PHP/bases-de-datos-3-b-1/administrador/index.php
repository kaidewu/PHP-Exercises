<?php
/**
 * @author Kaide Wu
 */

require_once "../comunes/biblioteca.php";

session_name($cfg["sessionName"]);
session_start();

if (!isset($_SESSION["conectado"]) || $_SESSION["conectado"] < NIVEL_ADMINISTRADOR) {
    header("Location:../index.php");
    exit;
}

cabecera("Administrador - Inicio", MENU_ADMINISTRADOR, PROFUNDIDAD_1);

pie();
