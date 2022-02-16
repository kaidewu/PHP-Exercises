<?php
/**
 * @author Kaide Wu
 */

// OPCIONES DISPONIBLES PARA EL ADMINISTRADOR DE LA APLICACIÓN

// Nombre de sesión

$cfg["sessionName"] = "mclibre-bases-de-datos-3-b-6";       // Nombre de sesión

// Base de datos utilizada por la aplicación

$cfg["dbMotor"] = SQLITE;                                   // Valores posibles: MYSQL o SQLITE

// Configuración para SQLite

$cfg["sqliteDatabase"] = "/tmp/mclibre-base-datos-3-b-6.sqlite";    // Ubicación de la base de datos

// Configuración para MySQL

$cfg["mysqlHost"]     = "mysql:host=localhost";             // Nombre de host
$cfg["mysqlUser"]     = "mclibre_base_datos_3_b_6";         // Nombre de usuario
$cfg["mysqlPassword"] = "";                                 // Contraseña de usuario
$cfg["mysqlDatabase"] = "mclibre_base_datos_3_b_6";         // Nombre de la base de datos

// Tamaño de los campos en la tabla Usuarios

$cfg["dbUsuariosTamUsuario"]  = 20;                         // Tamaño de la columna Usuarios > Nombre de Usuario
$cfg["dbUsuariosTamPassword"] = 64;                         // Tamaño de la columna Usuarios > Contraseña de usuario (cifrada)

// Tamaño de los controles en los formularios

$cfg["formUsuariosTamUsuario"]  = $cfg["dbUsuariosTamUsuario"];     // Tamaño de la caja de texto Usuario > Nombre de usuario
$cfg["formUsuariosTamPassword"] = 20;                               // Tamaño de la caja de texto Usuario > Contraseña

// Tamaño de los campos en la tabla Personas

$cfg["dbNoticiasTamCategoria"] = 40;                        // Tamaño de la columna Noticias > Categoria
$cfg["dbNoticiasTamTitulo"]    = 60;                        // Tamaño de la columna Noticias > Titulo
$cfg["dbNoticiasTamCuerpo"]    = 200;                        // Tamaño de la columna Noticias > Cuerpo
$cfg["dbNoticiasTamCreado"]    = 50;                        // Tamaño de la columna Noticias > Creado

// Tamaño de los controles en los formularios

$cfg["formNoticiasTamCategoria"]    = $cfg["dbNoticiasTamCategoria"];     // Tamaño de la caja de texto Noticias > Categoria
$cfg["formNoticiasTamTitulo"] = $cfg["dbNoticiasTamTitulo"];  // Tamaño de la caja de texto Noticias > Titulo
$cfg["formNoticiasTamCuerpoX"]   = 60;  // Tamaño X del área de texto Noticias > Cuerpo
$cfg["formNoticiasTamCuerpoY"]   = 5;   // Tamaño Y del área de texto Noticias > Cuerpo
$cfg["formNoticiasTamCreado"]    = $cfg["dbNoticiasTamCreado"];     // Tamaño de la caja de texto Noticias > Creado

// Número máximo de registros en las tablas (el valor 0 o negativo indica que no hay límite)

$cfg["dbUsuariosMaxReg"] = 20;                              // Número máximo de registros en la tabla Usuarios
$cfg["dbNoticiasMaxReg"] = 20;                              // Número máximo de registros en la tabla Personas

// Usuario de la aplicación

$cfg["rootName"]      = "root";                             // Nombre del Usuario Administrador de la aplicación
$cfg["rootPassword"]  = "4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2";  // Contraseña encriptada del Usuario Administrador de la aplicación
$cfg["hashAlgorithm"] = "sha256";                           // Algoritmo hash para encriptar la contraseña de usuario
                                                            // Los posibles algoritmos son https://www.php.net/manual/en/function.hash-algos.php
$cfg["rootPasswordModificable"] = false;                    // Contraseña del usuario Administrador se puede cambiar o no

// Método de envío de formularios

$cfg["formMethod"] = "get";                                 // Valores posibles: get o post
