<?php
/**
 * Menús 7 - biblioteca.php
 *
 * @author Kaide Wu
 *
 */
session_name("menu7");
session_start();
if(!isset($_SESSION["conectado"])){
    header("Location: index.php");
    exit;
}

function cabecera($texto)
{
    print "<!DOCTYPE html>\n";
    print "<html lang=\"es\">\n";
    print "<head>\n";
    print "  <meta charset=\"utf-8\">\n";
    print "  <title>\n";

    print "    $texto.\n";

    print "    Menús 7. Menús.\n";
    print "    Kaide Wu\n";
    print "  </title>\n";
    print "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
    print "  <link rel=\"stylesheet\" href=\"mclibre-php-proyectos.css\" title=\"Color\">\n";
    print "</head>\n";
    print "\n";
    print "<body>\n";
    print "  <header>\n";
    print "<h1>Menús 7 - $texto</h1>\n";
    print "\n";
    print "    <nav>\n";
    print "      <ul>\n";

    if($_SESSION["conectado"] == 0){
        print "       <li><a href=\"conectar.php\">Conectar</a></li>\n";
    }elseif($_SESSION["conectado"] == 1){
        print "<li><a href=\"secreto.php\">Secreto</a></li>\n";
        print "        <li><a href=\"desconectar.php\">Desconectar</a></li>\n";
    }

    print "      </ul>\n";
    print "    </nav>\n";
    print "  </header>\n";
    print "\n";
    print "  <main>\n";
}

function pie()
{
    print "  </main>\n";
    print "\n";
    print "  <footer>\n";
    print "    <p>Kaide Wu</p>\n";
    print "  </footer>\n";
    print "</body>\n";
    print "</html>";
}
