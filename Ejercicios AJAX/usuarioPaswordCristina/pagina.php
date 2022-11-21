<?php
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
if ($usuario == "admin" && $clave == "1234") {
    echo "USUARIO VÁLIDO";
} else {
    echo "USUARIO NO VÁLIDO";
}
