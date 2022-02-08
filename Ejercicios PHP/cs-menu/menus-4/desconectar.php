<?php
/**
 * Menús 4 - desconectar.php
 *
 * @author Kaide Wu
 *
 */
session_name("conectar");
session_start();
if(!isset($_SESSION["conectar"])){
    header("Location: index.php");
}
$_SESSION["conectar"] = 0;
include "biblioteca.php";

cabecera("desconectar");
print "<p>Usted se ha <strong>desconectado</strong>.</p>\n";
pie();