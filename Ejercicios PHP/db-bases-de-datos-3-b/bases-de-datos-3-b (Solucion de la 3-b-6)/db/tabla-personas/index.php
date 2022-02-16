<?php
/**
 * @author Kaide Wu
 */

require_once "../../comunes/biblioteca.php";

session_name($cfg["sessionName"]);
session_start();

if (!isset($_SESSION["conectado"]) || $_SESSION["nivel"] < NIVEL_USUARIO_BASICO) {
    header("Location:../../index.php");
    exit;
}

cabecera("Personas - Inicio", MENU_PERSONAS, PROFUNDIDAD_2);

pie();
