<?php
/**
 * @author Kaide Wu
 */

// Constantes y variables configurables por el programador de la aplicación

define("GET", "get");                       // Formularios se envían con GET
define("POST", "post");                     // Formularios se envían con POST

define("MYSQL", 1);                         // Base de datos MySQL
define("SQLITE", 2);                        // Base de datos SQLITE

define("MENU_PRINCIPAL", 1);                // Menú principal
define("MENU_VOLVER", 2);                   // Menú Volver a inicio

// Variables configurables por el administrador de la aplicación

require_once "config.php";

// Configuración Tabla Personas

$cfg["dbPersonasTamNombre"]    = 40;        // Tamaño de la columna Personas > Nombre
$cfg["dbPersonasTamApellidos"] = 60;        // Tamaño de la columna Personas > Apellidos
$cfg["dbPersonasTamTelefono"]  = 10;        // Tamaño de la columna Personas > Teléfono
$cfg["dbPersonasTamEmail"]  = 50;        // Tamaño de la columna Personas > Email

// Carga Biblioteca específica de la base de datos utilizada

if ($cfg["dbMotor"] == MYSQL) {
    require_once "biblioteca-mysql.php";
} elseif ($cfg["dbMotor"] == SQLITE) {
    require_once "biblioteca-sqlite.php";
}

// Funciones comunes

function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

function cabecera($texto, $menu)
{
    print "<!DOCTYPE html>\n";
    print "<html lang=\"es\">\n";
    print "<head>\n";
    print "  <meta charset=\"utf-8\">\n";
    print "  <title>\n";
    print "    $texto. Bases de datos (1 B) 1. Bases de datos (1 B).\n";
    print "    Kaide Wu\n";
    print "  </title>\n";
    print "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
    print "  <link rel=\"stylesheet\" href=\"mclibre-php-proyectos.css\" title=\"Color\">\n";
    print "</head>\n";
    print "\n";
    print "<body>\n";
    print "  <header>\n";
    print "    <h1>Bases de datos (1 B) 1 - $texto</h1>\n";
    print "\n";
    print "    <nav>\n";
    print "      <ul>\n";
    if ($menu == MENU_PRINCIPAL) {
        print "        <li><a href=\"insertar-1.php\">Añadir registro</a></li>\n";
        print "        <li><a href=\"listar.php\">Listar</a></li>\n";
        print "        <li><a href=\"borrar-1.php\">Borrar</a></li>\n";
        print "        <li><a href=\"buscar-1.php\">Buscar</a></li>\n";
        print "        <li><a href=\"modificar-1.php\">Modificar</a></li>\n";
        print "        <li><a href=\"borrar-todo-1.php\">Borrar todo</a></li>\n";
    } elseif ($menu == MENU_VOLVER) {
        print "        <li><a href=\"index.php\">Volver</a></li>\n";
    } else {
        print "        <li>Error en la selección de menú</li>\n";
    }
    print "      </ul>\n";
    print "    </nav>\n";
    print "  </header>\n";
    print "\n";
    print "  <main>\n";
}

function pie()
{
    print "  </main>\n";
    print "\n";
    print "  <footer>\n";
    print "    <p>Kaide Wu</p>\n";
    print "  </footer>\n";
    print "</body>\n";
    print "</html>";
}
