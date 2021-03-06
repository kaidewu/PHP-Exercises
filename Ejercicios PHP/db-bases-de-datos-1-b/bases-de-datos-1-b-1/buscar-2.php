<?php
/**
 * @author Kaide Wu
 */


require_once "biblioteca.php";

$pdo = conectaDb();

cabecera("Buscar 2", MENU_VOLVER);

$nombre    = recoge("nombre");
$apellidos = recoge("apellidos");
$telefono = recoge("telefono");

$consulta = "SELECT * FROM $cfg[dbPersonasTabla]
             WHERE nombre LIKE :nombre
             AND apellidos LIKE :apellidos";
$resultado = $pdo->prepare($consulta);
$resultado->execute([":nombre" => "%$nombre%", ":apellidos" => "%$apellidos%", ":telefono" => "%$telefono%"]);

if (!$resultado) {
    print "    <p class=\"aviso\">Error al seleccionar los registros. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
} else {
    print "    <p>Registros encontrados:</p>\n";
    print "\n";
    print "    <table class=\"conborde franjas\">\n";
    print "      <thead>\n";
    print "        <tr>\n";
    print "          <th>Nombre</th>\n";
    print "          <th>Apellidos</th>\n";
    print "          <th>Teléfono</th>\n";
    print "        </tr>\n";
    print "      </thead>\n";
    print "      <tbody>\n";
    foreach ($resultado as $valor) {
        print "        <tr>\n";
        print "          <td>$valor[nombre]</td>\n";
        print "          <td>$valor[apellidos]</td>\n";
        print "          <td>$valor[telefono]</td>\n";
        print "        </tr>\n";
    }
    print "      </tbody>\n";
    print "    </table>\n";
}

$pdo = null;

pie();
