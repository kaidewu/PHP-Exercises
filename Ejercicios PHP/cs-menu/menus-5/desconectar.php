<?php
/**
 * Menús 5 - desconectar.php
 *
 * @author Kaide Wu
 *
 */
session_name("menu5");
session_start();
if(!isset($_SESSION["conectado"])){
    header("Location: index.php");
}
$_SESSION["conectado"] = 0;
header("Location: index.php");