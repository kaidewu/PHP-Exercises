<?php
/**
 * Menús 7 - conectar.php
 *
 * @author Kaide Wu
 *
 */
include "biblioteca.php";
session_name("menu7");
session_start();
if(!isset($_SESSION["conectado"])){
    header("Location: index.php");
    exit;
}
$_SESSION["conectado"] = 1;
header("Location: index.php");
