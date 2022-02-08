<?

$db["TablaAgenda"]        = "$cfg[mysqlDatabase].agenda";   // Nombre de la tabla Agenda

// MYSQL: FUNCIÓN DE CONEXIÓN CON LA BASE DE DATOS
function conectaDb(){
    global $cfg;

    try {
        $tmp = new PDO($cfg["mysqlHost"], $cfg["mysqlUser"], $cfg["mysqlPassword"]);
        $tmp->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $tmp->exec("set names utf8mb4");
        return $tmp;
    } catch (PDOException $e) {
        print "    <p class=\"aviso\">Error: No puede conectarse con la base de datos / {$e->getMessage()}</p>\n";
        print "\n";
        exit;
    }
}

// EJEMPLO DE CONSULTA DE BORRADO DE TABLA
function BorrarTodo(){
    global $pdo, $db, $cfg;
    // MYSQL: EJEMPLO DE CONSULTA DE BORRADO DE BASE DE DATOS
    $consulta = "DROP DATABASE IF EXISTS $cfg[mysqlDatabase]";
    if (!$pdo->query($consulta)) {
        print "    <p class=\"aviso\">Error al borrar la base de datos / {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        print "    <p>Base de datos borrada correctamente.</p>\n";
        print "\n";
    }
    // MYSQL: EJEMPLO DE CONSULTA DE CREACIÓN DE BASE DE DATOS
    $consulta = "CREATE DATABASE $cfg[mysqlDatabase]
                CHARACTER SET utf8mb4
                COLLATE utf8mb4_unicode_ci";
    if (!$pdo->query($consulta)) {
        print "    <p class=\"aviso\">Error al crear la base de datos / {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        print "    <p>Base de datos creada correctamente.</p>\n";
        print "\n";
    }
    // MYSQL: EJEMPLO DE CONSULTA DE CREACIÓN DE TABLA
    $consulta = "CREATE TABLE $db[TablaAgenda]  (
                id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
                nombre VARCHAR($db[tamAgendaNombre]),
                apellidos VARCHAR($db[tamAgendaApellidos]),
                PRIMARY KEY(id)
                )";
    if (!$pdo->query($consulta)) {
        print "    <p class=\"aviso\">Error al crear la tabla / {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        print "    <p>Tabla creada correctamente.</p>\n";
        print "\n";
    }
}