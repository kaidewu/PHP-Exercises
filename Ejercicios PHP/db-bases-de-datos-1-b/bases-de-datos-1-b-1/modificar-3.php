<?php
/**
 * @author Kaide Wu
 */


require_once "biblioteca.php";

$pdo = conectaDb();

cabecera("Modificar 3", MENU_VOLVER);

$nombre    = recoge("nombre");
$apellidos = recoge("apellidos");
$id        = recoge("id");

$nombreOk    = false;
$apellidosOk = false;

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

if ($nombreOk && $apellidosOk) {
    $consulta = "UPDATE $cfg[dbPersonasTabla]
                 SET nombre=:nombre, apellidos=:apellidos
                 WHERE id=:id";
    $resultado = $pdo->prepare($consulta);

    if (!$resultado->execute([":nombre" => $nombre, ":apellidos" => $apellidos, ":id" => $id])) {
        print "    <p class=\"aviso\">Error al modificar el registro. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
        print "\n";
    } else {
        print "    <p>Registro modificado correctamente.</p>\n";
        print "\n";
    }
}

$pdo = null;

pie();
