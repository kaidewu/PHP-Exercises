<?php
/**
 * Menús 7 - desconectar.php
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
session_destroy();
header("Location: index.php");
