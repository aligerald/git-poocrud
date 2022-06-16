<?php
require_once "Connection.php";
require_once "MethodsCrud.php";

$id= $_POST["InputId"];
$name = $_POST["InputName"];
$lastname = $_POST["InputLastname"];

$data = array($id,$name, $lastname);
$object = new MethodsCrud();
if ($object->UpdateData($data) == 1) {
    header("location:index.php");
} else {
    echo "Fallo al Ingresar";
}
