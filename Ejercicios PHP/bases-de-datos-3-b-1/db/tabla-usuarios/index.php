<?php
/**
 * @author Kaide Wu
 */

require_once "../../comunes/biblioteca.php";

session_name($cfg["sessionName"]);
session_start();

if (!isset($_SESSION["conectado"]) || $_SESSION["conectado"] < NIVEL_ADMINISTRADOR) {
    header("Location:../../index.php");
    exit;
}

cabecera("Usuarios - Inicio", MENU_USUARIOS, PROFUNDIDAD_2);

pie();
