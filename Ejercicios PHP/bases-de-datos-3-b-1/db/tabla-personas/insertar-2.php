<?php
/**
 * @author Kaide Wu
 */

require_once "../../comunes/biblioteca.php";

session_name($cfg["sessionName"]);
session_start();

if (!isset($_SESSION["conectado"]) || $_SESSION["conectado"] < NIVEL_USUARIO_BASICO) {
    header("Location:../../index.php");
    exit;
}

$pdo = conectaDb();

cabecera("Personas - Añadir 2", MENU_PERSONAS, PROFUNDIDAD_2);

$nombre    = recoge("nombre");
$apellidos = recoge("apellidos");
$telefono  = recoge("telefono");
$correo    = recoge("correo");
$fecha      = recoge("fecha");

$nombreOk    = false;
$apellidosOk = false;
$telefonoOk  = false;
$correoOk    = false;
$fechaOK     = false;

if (mb_strlen($nombre, "UTF-8") > $cfg["dbPersonasTamNombre"]) {
    print "    <p class=\"aviso\">El nombre no puede tener más de $cfg[dbPersonasTamNombre] caracteres.</p>\n";
    print "\n";
} else {
    $nombreOk = true;
}

if (mb_strlen($apellidos, "UTF-8") > $cfg["dbPersonasTamApellidos"]) {
    print "    <p class=\"aviso\">Los apellidos no pueden tener más de $cfg[dbPersonasTamApellidos] caracteres.</p>\n";
    print "\n";
} else {
    $apellidosOk = true;
}

if (mb_strlen($telefono, "UTF-8") > $cfg["dbPersonasTamTelefono"]) {
    print "    <p class=\"aviso\">El teléfono no puede tener más de $cfg[dbPersonasTamTelefono] caracteres.</p>\n";
    print "\n";
} else {
    $telefonoOk = true;
}

if (mb_strlen($correo, "UTF-8") > $cfg["dbPersonasTamCorreo"]) {
    print "    <p class=\"aviso\">El correo no puede tener más de $cfg[dbPersonasTamCorreo]  caracteres.</p>\n";
    print "\n";
} else {
    $correoOk = true;
}

function compruebaFecha ($fecha){
    global $cfg;
    if (mb_strlen($fecha, "UTF-8") > $cfg["dbPersonasTamFecha"]){
        print "    <p class=\"aviso\">La fecha no puede tener más de $cfg[dbPersonasTamFecha] caracteres.</p>\n";
        print "\n";
    }
    return substr($fecha, 7, 4) . "-" . substr($fecha, 4, 2) . "-" . substr($fecha, 1, 2);
}


if ($nombre == "" && $apellidos == "" && $telefono == "" && $correo == "" && $fecha == "") {
    print "    <p class=\"aviso\">Hay que rellenar al menos uno de los campos. No se ha guardado el registro.</p>\n";
    print "\n";
    $nombreOk = $apellidosOk = $telefonoOk = $correoOk = $fechaOk = false;
}

if ($fecha == "" ) {
    $fecha = "0000-00-00";
    $fechaOk = true;
}
if (!compruebaFecha($fecha)) {
    $fechaOk = false;
}

if ($nombreOk && $apellidosOk && $telefonoOk && $correoOk) {
    $fecha = "";
    $consulta = "SELECT COUNT(*) FROM $cfg[dbPersonasTabla]
                 WHERE nombre = :nombre
                 AND apellidos LIKE :apellidos
                 AND telefono LIKE :telefono
                 AND correo LIKE :correo
                 AND fecha LIKE :fecha
                 AND id_usuario = $_SESSION[usuario]";

    $resultado = $pdo->prepare($consulta);
    if (!$resultado) {
        print "    <p class=\"aviso\">Error al preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } elseif (!$resultado->execute([":nombre" => $nombre, ":apellidos" => $apellidos, ":telefono" => $telefono, ":correo" => $correo, ":fecha" => $fecha])) {
        print "    <p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } elseif ($resultado->fetchColumn() > 0) {
        print "    <p class=\"aviso\">El registro ya existe.</p>\n";
    } else {
        $consulta = "SELECT COUNT(*) FROM $cfg[dbPersonasTabla]
                     WHERE id_usuario = $_SESSION[usuario]";

        $resultado = $pdo->query($consulta);
        if (!$resultado) {
            print "    <p class=\"aviso\">Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
        } elseif ($resultado->fetchColumn() >= $cfg["dbPersonasMaxReg"] && $cfg["dbPersonasMaxReg"] > 0) {
            print "    <p class=\"aviso\">Se ha alcanzado el número máximo de registros que se pueden guardar.</p>\n";
            print "\n";
            print "    <p class=\"aviso\">Por favor, borre algún registro antes de insertar un nuevo registro.</p>\n";
        } else {
            $consulta = "INSERT INTO $cfg[dbPersonasTabla]
                         (nombre, apellidos, telefono, correo, fecha, id_usuario)
                         VALUES (:nombre, :apellidos, :telefono, :correo, :fecha, $_SESSION[usuario] )";

            $resultado = $pdo->prepare($consulta);
            if (!$resultado) {
                print "    <p class=\"aviso\">Error al preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
            } elseif (!$resultado->execute([":nombre" => $nombre, ":apellidos" => $apellidos, ":telefono" => $telefono, ":correo" => $correo, ":fecha" => $fecha])) {
                print "    <p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
            } else {
                print "    <p>Registro creado correctamente.</p>\n";
            }
        }
    }
}

$pdo = null;

pie();
