<?php
$mysqli = new mysqli("localhost", "root", "", "umaki");

/* comprobar la conexión */
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

 ?>
