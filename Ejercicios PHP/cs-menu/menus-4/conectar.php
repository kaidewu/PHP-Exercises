<?php
/**
 * Menús 4 - conectar.php
 *
 * @author Kaide Wu
 *
 */
session_name("conectar");
session_start();
if(!isset($_SESSION["conectar"])){
    header("Location: index.php");
}
$_SESSION["conectar"] = 1;
include "biblioteca.php";

cabecera("Conectar");
print "<p>Usted se ha <strong>conectado</strong>.</p>\n";
pie();