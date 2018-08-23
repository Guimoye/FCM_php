<?php

echo '<html>';
echo '<body>';
echo ' <form action="request/api.php" method="get">';
echo ' DNI: <input type="text" name="dni"><br>';
echo ' Titulo: <input type="text" name="titulo"><br>';
echo ' Mensaje: <input type="text" name="cuerpo"><br>';
   echo ' <input type="submit" value="Enviar">';
echo '</form>';
echo '</body>';
echo '</html>';

?>