<?php
/**
 * @author Kaide Wu
 */

require_once "biblioteca.php";

$pdo = conectaDb();

cabecera("Listar", MENU_VOLVER);

$consulta = "SELECT * FROM $cfg[dbPersonasTabla]";

$resultado = $pdo->query($consulta);
if (!$resultado) {
    print "    <p class=\"aviso\">Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
} else {
    print "    <p>Listado completo de registros:</p>\n";
    print "\n";
    print "    <table class=\"conborde franjas\">\n";
    print "      <thead>\n";
    print "        <tr>\n";
    print "          <th>Nombre</th>\n";
    print "          <th>Apellidos</th>\n";
    print "          <th>Teléfono</th>\n";
    print "          <th>Email</th>\n";
    print "        </tr>\n";
    print "      </thead>\n";
    print "      <tbody>\n";
    foreach ($resultado as $valor) {
        print "        <tr>\n";
        print "          <td>$valor[nombre]</td>\n";
        print "          <td>$valor[apellidos]</td>\n";
        print "          <td>$valor[telefono]</td>\n";
        print "          <td>$valor[email]</td>\n";
        print "        </tr>\n";
    }
    print "      </tbody>\n";
    print "    </table>\n";
}

$pdo = null;

pie();
