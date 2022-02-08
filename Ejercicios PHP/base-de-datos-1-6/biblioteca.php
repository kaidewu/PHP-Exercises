<?php
define("MYSQL", "MYSQL");
define("SQLITE", "SQLITE");

$db["tamAgendaNombre"]    = 40;                 // Tamaño de la columna Agenda > Nombre
$db["tamAgendaApellidos"] = 60;                 // Tamaño de la columna Agenda > Apellidos

// biblioteca.php
require_once "config.php";

if ($cfg["dbMotor"] == MYSQL) {
    require_once "biblioteca-mysql.php";
} elseif ($cfg["dbMotor"] == SQLITE) {
    require_once "biblioteca-sqlite.php";
}

// EJEMPLO DE CONSULTA DE INSERCIÓN DE REGISTRO
function inserta($nombre, $apellidos){
    global $pdo, $db;
    $consulta = "INSERT INTO $db[TablaAgenda]
                (nombre, apellidos)
                VALUES (:nombre, :apellidos)";
    $result = $pdo->prepare($consulta);
    if (!$result->execute([":nombre" => $nombre, ":apellidos" => $apellidos])) {
        print "    <p class=\"aviso\">Error al crear el registro / {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        print "    <p>Registro creado correctamente.</p>\n";
        print "\n";
    }
}

// EJEMPLO DE CONSULTA DE MODIFICACIÓN DE REGISTRO
function actualiza($id, $nombre, $apellidos){
    global $pdo, $db;
    $consulta = "UPDATE $db[TablaAgenda]
                SET nombre=:nombre, apellidos=:apellidos
                WHERE id=:id";
    $result = $pdo->prepare($consulta);
    if (!$result->execute([":nombre" => $nombre, ":apellidos" => $apellidos, ":id" => $id])) {
        print "    <p class=\"aviso\">Error al modificar el registro / {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        print "    <p>Registro modificado correctamente.</p>\n";
        print "\n";
    }
}

// EJEMPLO DE CONSULTA DE BORRADO DE REGISTRO
// Borrar por ejemplo, [1 => 'on', 3 => 'on']
function borrar($id){
    global $pdo, $db;
    foreach ($id as $indice => $valor) {
        $consulta = "DELETE FROM $db[TablaAgenda]
                    WHERE id=:indice";
        $result = $pdo->prepare($consulta);
        if (!$result->execute([":indice" => $indice])) {
            print "    <p class=\"aviso\">Error al borrar el registro / {$pdo->errorInfo()[2]}</p>\n";
            print "\n";
        } else {
            print "    <p>Registro borrado correctamente.</p>\n";
            print "\n";
        }
    }
}

// EJEMPLO DE CONSULTA DE SELECCIÓN DE REGISTROS
function cuenta(){
    global $pdo, $db;
    $consulta = "SELECT COUNT(*) FROM $db[TablaAgenda] ";
    $result = $pdo->query($consulta);
    if (!$result) {
        print "    <p class=\"aviso\">Error en la consulta / {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        print "    <p>Se han encontrado {$result->fetchColumn()} registros.</p>\n";
        print "\n";
    }
}

// EJEMPLO DE CONSULTA DE SELECCIÓN DE REGISTROS
function listado(){
    global $pdo, $db;
    $consulta = "SELECT * FROM $db[TablaAgenda] ";
    $result = $pdo->query($consulta);
    if (!$result) {
        print "    <p class=\"aviso\">Error en la consulta / {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        print "     <ul>\n";
        foreach ($result as $valor) {
            print "    <li>$valor[id] - $valor[nombre] - $valor[apellidos]</li>\n";
        }
        print "</ul>\n";
    }
}