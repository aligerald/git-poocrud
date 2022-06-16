<?php
$id = $_GET["id"];
require_once "Connection.php";
require_once "MethodsCrud.php";

$object = new MethodsCrud();
if ($object->DeleteData($id) == 1) {
    header("location:index.php");
} else {
    echo "Fallo al Eliminar";
}
