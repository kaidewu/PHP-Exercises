<?php
/**
 * Menús 3 - pagina-2-1.php
 *
 * @author Kaide Wu
 *
 */
include "biblioteca.php";

$texto = "Segunda página - Confirmación previa";

cabecera($texto, $menu);
print "<form action=\"pagina-2-2.php\" method=\"get\">
      <p>¿Está seguro de querer ir a la segunda página?</p>

      <p>
        <input type=\"submit\" value=\"Sí\" name=\"si\">
        <input type=\"submit\" value=\"No\" name=\"no\">
      </p>
    </form>\n";
pie();
