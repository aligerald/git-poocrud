<?php


require_once "Connection.php";
$c = new Connection();
$connection = $c->connect();
$id = $_GET['id'];
$sql = "SELECT id_per, name_per, lastname_per FROM persons WHERE id_per='$id'";
$query = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="UpdateCrud.php" method="POST">
        <input type="hidden" name="InputId" value="<?php echo $row['id_per']; ?>">
        <input type="text" name="InputName" placeholder="Nombre" value="<?php echo $row['name_per']; ?>">
        <input type="text" name="InputLastname" placeholder="Apellido" value="<?php echo $row['lastname_per']; ?>">
        <input type="submit" name="Boton" value="GUARDAR">
    </form>

</body>

</html>