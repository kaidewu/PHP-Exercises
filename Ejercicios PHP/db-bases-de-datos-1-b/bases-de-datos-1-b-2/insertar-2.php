<?php
/**
 * @author Kaide Wu
 */

require_once "biblioteca.php";

$pdo = conectaDb();

cabecera("Añadir 2", MENU_VOLVER);

$nombre    = recoge("nombre");
$apellidos = recoge("apellidos");
$telefono  = recoge("telefono");
$email     = recoge("email");

$nombreOk    = false;
$apellidosOk = false;
$telefonoOk  = false;
$emailOk     = false;

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

if (mb_strlen($email, "UTF-8") > $cfg["dbPersonasTamEmail"]) {
    print "    <p class=\"aviso\">El email no puede tener más de $cfg[dbPersonasTamEmail] caracteres.</p>\n";
    print "\n";
} else {
    $emailOk = true;
}

if ($nombreOk && $apellidosOk && $telefonoOk && $emailOk) {
    $consulta = "INSERT INTO $cfg[dbPersonasTabla]
                 (nombre, apellidos, telefono, email)
                 VALUES (:nombre, :apellidos, :telefono, :email)";

    $resultado = $pdo->prepare($consulta);
    if (!$resultado) {
        print "    <p class=\"aviso\">Error al preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
    } elseif (!$resultado->execute([":nombre" => $nombre, ":apellidos" => $apellidos, ":telefono" => "$telefono", ":email" => "$email"])) {
        print "    <p class=\"aviso\">Error al crear el registro. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        print "    <p>Registro creado correctamente.</p>\n";
        print "\n";
    }
}

$pdo = null;

pie();
