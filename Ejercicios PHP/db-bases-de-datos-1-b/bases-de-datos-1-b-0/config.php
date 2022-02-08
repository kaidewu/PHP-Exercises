<?php
/**
 * @author Kaide Wu
 */

// OPCIONES DISPONIBLES PARA EL ADMINISTRADOR DE LA APLICACIÓN

// Base de datos utilizada por la aplicación

$cfg["dbMotor"] = MYSQL;                                   // Valores posibles: MYSQL o SQLITE

// Configuración para SQLite

$cfg["sqliteDatabase"] = "/tmp/iaw-base-datos-1-b-0.sqlite";    // Ubicación de la base de datos

// Configuración para MySQL

$cfg["mysqlHost"]     = "mysql:host=localhost";             // Nombre de host
$cfg["mysqlUser"]     = "iaw_base_datos_1_b_0";             // Nombre de usuario
$cfg["mysqlPassword"] = "iaw_base_datos_1_b_0";                                 // Contraseña de usuario
$cfg["mysqlDatabase"] = "iaw_base_datos_1_b_0";             // Nombre de la base de datos

// Método de envío de formularios

$cfg["formMethod"] = GET;                                   // Valores posibles: GET o POST
