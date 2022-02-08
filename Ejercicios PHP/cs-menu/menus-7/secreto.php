<?php
/**
 * Menús 4 - secreto.php
 *
 * @author Kaide Wu
 *
 */
include "biblioteca.php";
session_name("menu7");
session_start();
if(!isset($_SESSION["conectado"]) and $_SESSION["conectado"] == 0){
    header("Location: index.php");
    exit;
}

cabecera("Secreto");
print "    <p>A esta página sólo se puede llegar si usted está <strong>conectado</strong>.</p>\n";
pie();

