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

cabecera("Personas - Añadir 1", MENU_PERSONAS, PROFUNDIDAD_2);

$consulta = "SELECT COUNT(*) FROM $cfg[dbPersonasTabla]
             WHERE id_usuario = $_SESSION[usuario]";

$resultado = $pdo->query($consulta);
if (!$resultado) {
    print "    <p class=\"aviso\">Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
} elseif ($resultado->fetchColumn() >= $cfg["dbPersonasMaxReg"] && $cfg["dbPersonasMaxReg"] > 0) {
    print "    <p class=\"aviso\">Se ha alcanzado el número máximo de registros que se pueden guardar.</p>\n";
    print "\n";
    print "    <p class=\"aviso\">Por favor, borre algún registro antes.</p>\n";
} else {
    print "    <form action=\"insertar-2.php\" method=\"$cfg[formMethod]\">\n";
    print "      <p>Escriba los datos del nuevo registro:</p>\n";
    print "\n";
    print "      <table>\n";
    print "        <tbody>\n";
    print "          <tr>\n";
    print "            <td>Nombre:</td>\n";
    print "            <td><input type=\"text\" name=\"nombre\" size=\"$cfg[dbPersonasTamNombre]\" maxlength=\"$cfg[dbPersonasTamNombre]\" autofocus></td>\n";
    print "          </tr>\n";
    print "          <tr>\n";
    print "            <td>Apellidos:</td>\n";
    print "            <td><input type=\"text\" name=\"apellidos\" size=\"$cfg[dbPersonasTamApellidos]\" maxlength=\"$cfg[dbPersonasTamApellidos]\"></td>\n";
    print "          </tr>\n";
    print "          <tr>\n";
    print "            <td>Teléfono:</td>\n";
    print "            <td><input type=\"text\" name=\"telefono\" size=\"$cfg[dbPersonasTamTelefono]\" maxlength=\"$cfg[dbPersonasTamTelefono]\"></td>\n";
    print "          </tr>\n";
    print "          <tr>\n";
    print "            <td>Correo:</td>\n";
    print "            <td><input type=\"text\" name=\"correo\" size=\"$cfg[dbPersonasTamCorreo]\" maxlength=\"$cfg[dbPersonasTamCorreo]\"></td>\n";
    print "          </tr>\n";
    print "          <tr>\n";
    print "            <td>Fecha de Nacimiento:</td>\n";
    print "            <td><input type=\"date\" name=\"fecha\" size=\"$cfg[dbPersonasTamFecha]\" maxlength=\"$cfg[dbPersonasTamFecha]\"></td>\n";
    print "          </tr>\n";
    print "        </tbody>\n";
    print "      </table>\n";
    print "\n";
    print "      <p>\n";
    print "        <input type=\"submit\" value=\"Añadir\">\n";
    print "        <input type=\"reset\" value=\"Reiniciar formulario\">\n";
    print "      </p>\n";
    print "    </form>\n";
}

$pdo = null;

pie();
