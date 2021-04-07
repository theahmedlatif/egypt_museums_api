<?php
    class Museum{
        // Connection
        private $conn;

        // Table
        private $db_table = "museums";

        // Columns
        public $id;
        public $mname;
        public $arabic_name;
        public $city;
        public $type;
        public $est_year;
        public $website;
        public $coordinates;
        public $wikipedia_url;
        public $created_at;
        public $updated_at;

        // Database Connection
        public function __construct($db)
        {
            $this->conn = $db;
        }

        // Get all museums
        public function getMuseums()
        {
            $sqlQuery = "SELECT id, mname, arabic_name, city, type, est_year, website, coordinates, wikipedia_url FROM " . $this->db_table;
            $statement = $this->conn->prepare($sqlQuery);
            $statement->execute();
            return $statement;

        }
    }