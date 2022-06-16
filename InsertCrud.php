<?php
require_once "Connection.php";
require_once "MethodsCrud.php";

$name = $_POST["InputName"];
$lastname = $_POST["InputLastname"];

$data = array($name, $lastname);
$object = new MethodsCrud();
if ($object->InsertData($data) == 1) {
    header("location:index.php");
} else {
    echo "Fallo al Ingresar";
}
