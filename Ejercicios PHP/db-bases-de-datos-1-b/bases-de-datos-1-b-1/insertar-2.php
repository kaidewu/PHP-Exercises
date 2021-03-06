<?php
/**
 * @author Kaide Wu
 */


require_once "biblioteca.php";

$pdo = conectaDb();

cabecera("Añadir 2", MENU_VOLVER);

$nombre    = recoge("nombre");
$apellidos = recoge("apellidos");
$telefono = recoge("telefono");

$nombreOk    = false;
$apellidosOk = false;
$telefonoOk = false;

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

if (mb_strlen($telefono, "UTF-8") > $cfg["dbPersonasTamtelefono"]) {
    print "    <p class=\"aviso\">El teléfono no puede tener más de $cfg[dbPersonasTamtelefono] caracteres.</p>\n";
    print "\n";
} else {
    $telefonoOk = true;
}

if ($nombreOk && $apellidosOk && $telefonoOk) {
    $consulta = "INSERT INTO $cfg[dbPersonasTabla]
                (nombre, apellidos, telefono)
                VALUES (:nombre, :apellidos, :telefono)";
    $resultado = $pdo->prepare($consulta);

    if (!$resultado->execute([":nombre" => $nombre, ":apellidos" => $apellidos, ":telefono" => $telefono])) {
        print "    <p class=\"aviso\">Error al crear el registro. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        print "    <p>Registro creado correctamente.</p>\n";
        print "\n";
    }
}

$pdo = null;

pie();
