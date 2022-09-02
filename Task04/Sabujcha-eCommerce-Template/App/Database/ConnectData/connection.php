<?php

namespace App\Database\ConnectData;

use mysqli;

class connection
{

    private $database_server = "localhost";
    private $database_username = "root";
    private $database_password = "";
    private $database_name = "ecommerce";
    public $conn;

    // private $database_port = 3306;

    public function __construct()
    {

        $this->conn = new mysqli(
            $this->database_server,
            $this->database_username,
            $this->database_password,
            $this->database_name
        );

        // if ($this->conn->connect_error) {
        //     die("Connection failed: " . $this->conn->connect_error);
        // }
        // echo "Connected successfully";
    }
}