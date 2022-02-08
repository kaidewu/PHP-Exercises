<?php
/**
 * @author Kaide Wu
 */

// OPCIONES DISPONIBLES PARA EL ADMINISTRADOR DE LA APLICACIÓN

// Base de datos utilizada por la aplicación

$cfg["dbMotor"] = SQLITE;                                   // Valores posibles: MYSQL o SQLITE

// Configuración para SQLite

$cfg["sqliteDatabase"] = "/tmp/iaw-base-datos-2-b-0.sqlite";    // Ubicación de la base de datos

// Configuración para MySQL

$cfg["mysqlHost"]     = "mysql:host=localhost";             // Nombre de host
$cfg["mysqlUser"]     = "iaw_base_datos_2_b_0";             // Nombre de usuario
$cfg["mysqlPassword"] = "";                                 // Contraseña de usuario
$cfg["mysqlDatabase"] = "iaw_base_datos_2_b_0";             // Nombre de la base de datos

// Método de envío de formularios

$cfg["formMethod"] = GET;                                   // Valores posibles: GET o POST

// Otras configuraciones

$cfg["dbPersonasmaxReg"] = 20;                              // Número máximo de registros en la tabla Personas
