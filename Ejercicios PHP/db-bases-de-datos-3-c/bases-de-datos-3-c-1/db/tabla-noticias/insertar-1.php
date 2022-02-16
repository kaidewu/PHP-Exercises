<?php
/**
 * @author Kaide Wu
 */

require_once "../../comunes/biblioteca.php";

session_name($cfg["sessionName"]);
session_start();

if (!isset($_SESSION["conectado"]) || $_SESSION["nivel"] < NIVEL_USUARIO_BASICO) {
    header("Location:../../index.php");
    exit;
}

$pdo = conectaDb();
$_SESSION["hoy"] = date("Y-m-d");
cabecera("Noticias - Añadir 1", MENU_NOTICIAS, PROFUNDIDAD_2);

$consulta = "SELECT COUNT(*) FROM $cfg[dbNoticiasTabla]";

$resultado = $pdo->query($consulta);
if (!$resultado) {
    print "    <p class=\"aviso\">Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
} elseif ($resultado->fetchColumn() >= $cfg["dbNoticiasMaxReg"] && $cfg["dbNoticiasMaxReg"] > 0) {
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
    print "            <td>Categoria:</td>\n";
    print "            <td><input type=\"text\" name=\"categoria\" size=\"$cfg[formNoticiasTamCategoria]\" maxlength=\"$cfg[formNoticiasTamCategoria]\" autofocus></td>\n";
    print "          </tr>\n";
    print "          <tr>\n";
    print "            <td>Titulo:</td>\n";
    print "            <td><input type=\"text\" name=\"titulo\" size=\"$cfg[formNoticiasTamTitulo]\" maxlength=\"$cfg[formNoticiasTamTitulo]\"></td>\n";
    print "          </tr>\n";
    print "          <tr>\n";
    print "            <td>Cuerpo:</td>\n";
    print "            <td><textarea name=\"cuerpo\" rows=\"$cfg[formNoticiasTamCuerpoY]\" cols=\"$cfg[formNoticiasTamCuerpoX]\"></textarea></td>\n";
    print "          </tr>\n";
    print "          <tr>\n";
    print "            <td>Creado:</td>\n";
    print "            <td><input type=\"date\" name=\"creado\" value=\"$_SESSION[hoy]\" size=\"$cfg[formNoticiasTamCreado]\" maxlength=\"$cfg[formNoticiasTamCreado]\"></td>\n";
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
