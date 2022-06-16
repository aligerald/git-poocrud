<?php

class Connection
{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "poocrud";

    public function connect()

    
    {
        $connect = mysqli_connect(
            $this->server,
            $this->user,
            $this->password,
            $this->database
        );
        return $connect;
    }
}
