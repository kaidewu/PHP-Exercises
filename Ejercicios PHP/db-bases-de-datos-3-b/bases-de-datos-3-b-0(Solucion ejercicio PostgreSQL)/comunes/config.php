<?php
/**
 * @author    Bartolomé Sintes Marco - bartolome.sintes+mclibre@gmail.com
 * @license   https://www.gnu.org/licenses/agpl-3.0.txt AGPL 3 or later
 * @link      https://www.mclibre.org
 */

// OPCIONES DISPONIBLES PARA EL ADMINISTRADOR DE LA APLICACIÓN

// Base de datos utilizada por la aplicación

$cfg["dbMotor"] = SQLITE;                                   // Valores posibles: MYSQL o SQLITE

// Configuración para SQLite

$cfg["sqliteDatabase"] = "/tmp/mclibre-base-datos-3-b-0.sqlite";    // Ubicación de la base de datos

// Configuración para MySQL

$cfg["mysqlHost"]     = "mysql:host=localhost";             // Nombre de host
$cfg["mysqlUser"]     = "mclibre_base_datos_3_b_0";         // Nombre de usuario
$cfg["mysqlPassword"] = "";                                 // Contraseña de usuario
$cfg["mysqlDatabase"] = "mclibre_base_datos_3_b_0";         // Nombre de la base de datos

// Configuración para PostgreSQL

$cfg["pgsqlHost"]    = "pgsql:host=localhost";              // Nombre de host
$cfg["pgsqlPort"]    = "5432";                              // Número de puerto
$cfg["pgsqlDatabase"] = "iaw";                          // Nombre de la base de datos
$cfg["pgsqlUser"]     = "iaw";                          // Nombre de usuario
$cfg["pgsqlPassword"] = "iaw";                                 // Contraseña de usuario

// Configuración de la tabla Personas

$cfg["dbPersonasTamNombre"]    = 40;                        // Tamaño de la columna Personas > Nombre
$cfg["dbPersonasTamApellidos"] = 60;                        // Tamaño de la columna Personas > Apellidos
$cfg["dbPersonasTamTelefono"]  = 10;                        // Tamaño de la columna Personas > Teléfono
$cfg["dbPersonasTamCorreo"]    = 50;                        // Tamaño de la columna Personas > Correo
$cfg["dbPersonasTamNacido"]    = 10;                        // Tamaño de la columna Personas > Correo

// Número máximo de registros en las tablas

$cfg["dbUsuariosmaxReg"] = 20;                              // Número máximo de registros en la tabla Usuarios
$cfg["dbPersonasMaxReg"] = 20;                              // Número máximo de registros en la tabla Personas

// Usuario de la aplicación

$cfg["rootName"]      = "root";                             // Nombre del Usuario Administrador de la aplicación
$cfg["rootPassword"]  = "4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2";  // Contraseña encriptada del Usuario Administrador de la aplicación
$cfg["hashAlgorithm"] = "sha256";                           // Algoritmo hash para encriptar la contraseña de usuario
                                                            // Los posibles algoritmos son https://www.php.net/manual/en/function.hash-algos.php
$cfg["rootPasswordModificable"] = false;                    // Contraseña del usuario Administrador se puede cambiar o no

// Nombre de sesión

$cfg["sessionName"] = "mclibre-bases-de-datos-3-b-0";       // Nombre de sesión

// Método de envío de formularios

$cfg["formMethod"] = "get";                                 // Valores posibles: get o post
