<?php
    
    class Database {
        private $host = "localhost";
        private $username = "root";
        private $db = "carwashDB";
        private $password = "101407";
        private $conn;
        public function connect()
        {
            $this->connection();
        }

        private function connection()
        {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);

            if ($this->conn->connect_error)
            {
                die("Connection failed: " . $this->conn->connect_error);
            }

        }

        public function getConnection()
        {
            return $this->conn;
        }

    }

?>