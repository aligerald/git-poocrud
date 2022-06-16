<?php
class MethodsCrud
{
    public function ShowData($sql)
    {
        $c = new Connection();
        $connection = $c->connect();
        $query = mysqli_query($connection, $sql);
        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }

    public function InsertData($data)
    {
        $c = new Connection();
        $connection = $c->connect();
        $sql = "INSERT INTO persons (name_per,lastname_per) VALUES ('$data[0]','$data[1]')";
        return $query = mysqli_query($connection, $sql);
    }

    public function UpdateData($data)
    {
        $c = new Connection();
        $connection = $c->connect();
        $sql = "UPDATE persons SET name_per='$data[1]',lastname_per='$data[2]' WHERE id_per='$data[0]'";
        return $query = mysqli_query($connection, $sql);
    }
    public function DeleteData($id)
    {
        $c = new Connection();
        $connection = $c->connect();
        $sql = "DELETE FROM persons WHERE id_per='$id'";
        return $query = mysqli_query($connection, $sql);
    }
}
