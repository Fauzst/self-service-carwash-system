<?php
    /*
        This program is for a Database Class that will have methods such as:
            ** connect() -- Act as a public function to establish connection with the database
            ** connection() -- A private function that has the source code to connect into the database
            ** getConnection() -- Another public function to get the connection object
    */

    class Database 
    {
        private $host = "localhost";
        private $username = "root";
        private $db = "carwashDB";
        private $password = "101407";
        private $conn;
        public function __construct()
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