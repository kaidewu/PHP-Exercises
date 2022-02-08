<?php
/**
 * Menús 5 - conectar.php
 *
 * @author Kaide Wu
 *
 */
session_name("menu5");
session_start();
if(!isset($_SESSION["conectado"])){
    header("Location: index.php");
}
$_SESSION["conectado"] = 1;
header("Location: index.php");