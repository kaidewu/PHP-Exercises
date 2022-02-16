<?php

// Registros de prueba opcionales

$cfg["registrosDemo"] = [
    [$cfg["dbUsuariosTabla"], [2, "usuario1", encripta("usuario1"), NIVEL_USUARIO_BASICO]],
    [$cfg["dbUsuariosTabla"], [3, "usuario2", encripta("usuario2"), NIVEL_USUARIO_BASICO]],
    [$cfg["dbUsuariosTabla"], [4, "admin1", encripta("admin1"), NIVEL_ADMINISTRADOR]],
    [$cfg["dbNoticiasTabla"], [1, "phpMyAdmin", "Publicado phpMyAdmin 5.1.2", "Se ha publicado bla bla bla ...", "2022-01-22"]],
    [$cfg["dbNoticiasTabla"], [2, "VSCode", "Publicado Visual Studio Code 1.64", "Se ha publicado bla bla bla ...", "2022-02-03"]],
    [$cfg["dbNoticiasTabla"], [3, "WordPress", "Publicado WordPress 5.9", "Se ha publicado bla bla bla ...", "2022-01-25"]],
];

function insertaDemo()
{
    global $cfg, $pdo;

    print "    <p>Insertando registros de prueba ...</p>\n";
    print "\n";
    foreach ($cfg["registrosDemo"] as $registro) {
        if ($registro[0] == $cfg["dbUsuariosTabla"]) {
            $consulta = "INSERT INTO $cfg[dbUsuariosTabla]
                         (id, usuario, password, nivel)
                         VALUES ({$registro[1][0]}, '{$registro[1][1]}', '{$registro[1][2]}',  {$registro[1][3]})";
        } elseif ($registro[0] == $cfg["dbNoticiasTabla"]) {
            $consulta = "INSERT INTO $cfg[dbNoticiasTabla]
                         (id, categoria, titulo, cuerpo, creado)
                         VALUES ({$registro[1][0]}, '{$registro[1][1]}', '{$registro[1][2]}', '{$registro[1][3]}', '{$registro[1][4]}')";
        }

        if (!$pdo->query($consulta)) {
            print "    <p class=\"aviso\">Error al preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
        } else {
            print "    <p>Registro creado correctamente.</p>\n";
        }
        print "\n";
    }
}
