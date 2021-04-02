<?php
    class Database {
        private $host = "127.0.0.1";
        private $database_name = "example_database";
        private $username = "example_user";
        private $password = "example_password";

        public $conn;

        public function getConnection() {
            $this->conn = null;
            try {
                $this->conn = new PDO("mysql:host=" . $this->host.
                ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch (PDOException $exception){
                echo "Couldn't connect to database: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }