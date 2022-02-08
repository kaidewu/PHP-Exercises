<?php
/**
 * Menús 1 - biblioteca.php
 *
 * @author Kaide Wu
 *
 */

function cabecera($texto, $mensaje)
{
    print "<!DOCTYPE html>\n";
    print "<html lang=\"es\">\n";
    print "<head>\n";
    print "  <meta charset=\"utf-8\">\n";
    print "  <title>\n";

    print "    Ejercicio incompleto.\n";

    print "    Menús 1. Menús.\n";
    print "    Kaide Wu\n";
    print "  </title>\n";
    print "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
    print "  <link rel=\"stylesheet\" href=\"mclibre-php-proyectos.css\" title=\"Color\">\n";
    print "</head>\n";
    print "\n";
    print "<body>\n";
    print "  <header>\n";

    print "<h1>Menús 1 - $texto</h1>\n";

    print "\n";
    print "    <nav>\n";
    print "      <ul>\n";
    print "        <li><a href=\"index.php\">Página inicial</a></li>\n";
    print "        <li><a href=\"pagina-2.php\">Segunda página</a></li>\n";
    print "        <li><a href=\"pagina-3.php\">Tercera página</a></li>\n";
    print "      </ul>\n";
    print "    </nav>\n";
    print "  </header>\n";
    print "\n";
    print "  <main>\n";
    print "    <p>$mensaje</p>\n";
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
