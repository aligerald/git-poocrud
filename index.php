<?php
require_once "Connection.php";
require_once "MethodsCrud.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Poo PHP</title>
</head>

<body>

    <form action="InsertCrud.php" method="POST">
        <input type="text" name="InputName" placeholder="Nombre">
        <input type="text" name="InputLastname" placeholder="Apellido">
        <input type="submit" name="Boton" value="GUARDAR ">
    </form>

    <table>
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Actualizar</td>
        </tr>
        <?php
        $object = new MethodsCrud();
        $sql = "SELECT id_per, name_per, lastname_per FROM persons";
        $data = $object->ShowData($sql);
        foreach ($data as $key) {
        ?>
            <tr>
                <td><?php echo $key['name_per'] ?></td>
                <td><?php echo $key['lastname_per'] ?></td>
                <td><a href="UpdateForm.php?id=<?php echo $key['id_per'] ?>"> EDITAR</a></td>
                <td><a href="DeleteCrud.php?id=<?php echo $key['id_per'] ?>"> ELIMINAR</a></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>