<?php
/**
 * @author    Bartolomé Sintes Marco - bartolome.sintes+mclibre@gmail.com
 * @license   https://www.gnu.org/licenses/agpl-3.0.txt AGPL 3 or later
 * @link      https://www.mclibre.org
 */
// FUNCIONES ESPECÍFICAS DE LA BASE DE DATOS SQLITE

// SQLITE: Nombres de las tablas

$cfg["dbPersonasTabla"] = "personas";                       // Nombre de la tabla Personas
$cfg["dbUsuariosTabla"] = "usuarios";                       // Nombre de la tabla Usuarios

// pgsql: Conexión con la base de datos

function conectaDb()
{
    global $cfg;

    try {
        $conexion = "$cfg[pgsqlHost];port=$cfg[pgsqlPort];dbname=$cfg[pgsqlDatabase];user=$cfg[pgsqlUser];password=$cfg[pgsqlPassword]";
        $tmp = new PDO($conexion);
        $tmp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        return $tmp;
    } catch (PDOException $e) {
        print "    <p class=\"aviso\">Error: No puede conectarse con la base de datos. {$e->getMessage()}</p>\n";
        exit;
    }
}

// SQLITE: Consultas de borrado y creación de tablas

function borraTodo()
{
    global $pdo, $cfg;

    $consulta = "DROP TABLE IF EXISTS $cfg[dbUsuariosTabla]";

    if (!$pdo->query($consulta)) {
        print "    <p class=\"aviso\">Error al borrar la tabla Usuarios. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } else {
        print "    <p>Tabla Usuarios borrada correctamente (si existía).</p>\n";
    }
    print "\n";

    $consulta = "DROP TABLE IF EXISTS $cfg[dbPersonasTabla]";

    if (!$pdo->query($consulta)) {
        print "    <p class=\"aviso\">Error al borrar la tabla Personas. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } else {
        print "    <p>Tabla Personas borrada correctamente (si existía).</p>\n";
    }
    print "\n";

    $consulta = "CREATE TABLE $cfg[dbUsuariosTabla]  (
        id SERIAL PRIMARY KEY,
        usuario VARCHAR($cfg[dbUsuariosTamUsuario]),
        password VARCHAR($cfg[dbUsuariosTamPassword]),
        nivel INTEGER NOT NULL
        )";

    if (!$pdo->query($consulta)) {
        print "    <p class=\"aviso\">Error al crear la tabla Usuarios. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } else {
        print "    <p>Tabla Usuarios creada correctamente.</p>\n";
        $consulta = "INSERT INTO $cfg[dbUsuariosTabla]
                     (usuario, password, nivel)
                     VALUES ('$cfg[rootName]', '$cfg[rootPassword]', " . $cfg["usuariosNiveles"]["Administrador"] . ")";

        if (!$pdo->query($consulta)) {
            print "    <p class=\"aviso\">Error al insertar el registro de usuario. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
        } else {
            print "    <p>Registro de usuario creado correctamente.</p>\n";
        }
    }

    $consulta = "CREATE TABLE $cfg[dbPersonasTabla]  (
                 id SERIAL PRIMARY KEY,
                 nombre VARCHAR($cfg[dbPersonasTamNombre]),
                 apellidos VARCHAR($cfg[dbPersonasTamApellidos]),
                 telefono VARCHAR($cfg[dbPersonasTamTelefono]),
                 correo VARCHAR($cfg[dbPersonasTamCorreo])
                 )";

    if (!$pdo->query($consulta)) {
        print "    <p class=\"aviso\">Error al crear la tabla Personas. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } else {
        print "    <p>Tabla Personas creada correctamente.</p>\n";
        print "    <form action=\"insertar-2.php\" method=\"$cfg[formMethod]\">\n";
    print "      <p>Escriba los datos del nuevo registro:</p>\n";
    print "\n";
    print "      <table>\n";
    print "        <tbody>\n";
    print "          <tr>\n";
    print "            <td>¿Quieres insertar resgitros?</td>\n";
    print "            <td><input type=\"button\" name=\"boton\" value=\"Si\"></td>\n";
    print "          </tr>\n";
    print "        </tbody>\n";
    print "      </table>\n";
    print "\n";
    print "    </form>\n";
    }
}

function existenTablas()
{
    global $pdo, $cfg;

    $existe = true;

    $consulta = "SELECT count(*) FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$cfg[mysqlDatabase]'";

    $resultado = $pdo->query($consulta);
    if (!$resultado) {
        $existe = false;
        print "    <p class=\"aviso\">Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        if ($resultado->fetchColumn() == 0) {
            $existe = false;
        } else {
            foreach ($cfg["dbTablas"] as $tabla) {
                // En information_schema.tables los nombres de las tablas no llevan el nombre
                // de la base de datos, así que lo elimino
                $tabla = str_replace("$cfg[mysqlDatabase].", "", $tabla);

                $consulta = "SELECT count(*) FROM information_schema.tables
                             WHERE table_schema = '$cfg[mysqlDatabase]'
                             AND table_name = '$tabla'";

                $resultado = $pdo->query($consulta);
                if (!$resultado) {
                    $existe = false;
                    print "    <p class=\"aviso\">Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
                    print "\n";
                } else {
                    if ($resultado->fetchColumn() == 0) {
                        $existe = false;
                    }
                }
            }
        }
    }
    return $existe;
}
