<?php
require "biblioteca.php";
print "<h1>Aplicación configurable: SQLite o MySQL</h1>\n";
$pdo = conectaDB();
BorrarTodo();
inserta("Buenas", "Tardes");
inserta("Julio", "Iglesias");
inserta("Belén", "Estebán");
cuenta();
listado();
actualiza(1, "La", "Rosalía");
listado();
borrar([3 => "on"]);
listado();
print "<p>Programa Terminado</p>\n";