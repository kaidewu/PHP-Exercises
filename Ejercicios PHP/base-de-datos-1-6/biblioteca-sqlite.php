<?php

// FUNCIÓN DE CONEXIÓN CON LA BASE DE DATOS SQLITE
function conectaDb(){
    global $cfg;

    try {
        print "sqlite:$cfg[sqliteDatabase]";
        $tmp = new PDO("sqlite:$cfg[sqliteDatabase]");
        return $tmp;
    } catch (PDOException $e) {
        print "    <p class=\"aviso\">Error: No puede conectarse con la base de datos.</p>\n";
        print "\n";
        print "    <p class=\"aviso\">Error: " . $e->getMessage() . "</p>\n";
        exit;
    }
}

// EJEMPLO DE CONSULTA DE BORRADO DE TABLA
function BorrarTodo(){
    global $pdo, $db;
    $consulta = "DROP TABLE IF EXISTS $db[TablaAgenda] ";
    if (!$pdo->query($consulta)) {
        print "    <p class=\"aviso\">Error al borrar la tabla / {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        print "    <p>Tabla borrada correctamente (si existía).</p>\n";
        print "\n";
    }
    // SQLITE: EJEMPLO DE CONSULTA DE CREACIÓN DE TABLA
    $consulta = "CREATE TABLE $db[TablaAgenda] (
                id INTEGER PRIMARY KEY,
                nombre VARCHAR($db[tamAgendaNombre]),
                apellidos VARCHAR($db[tamAgendaApellidos])
            )";
    if (!$pdo->query($consulta)) {
        print "    <p class=\"aviso\">Error al crear la tabla / {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        print "    <p>Tabla creada correctamente.</p>\n";
        print "\n";
    }
}