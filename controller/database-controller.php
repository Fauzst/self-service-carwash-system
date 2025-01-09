<?php
    class DatabaseController
    {
        // Connection Informations
        private $host = 'localhost';
        private $dbname = 'carwashDB';
        private $username = 'root';
        private $password = '';
        private $conn;
       
        public function __construct(){
            $this->connect();
        }

        private function connect(){
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        }

        public function getPackage(){
            $sql = "SELECT * FROM packages";
            $result = $this->conn->query($sql);

            $records = [];

            if ($result && $result->num_rows > 0) {
            {
                while ($row = $result->fetch_assoc())
                {
                    $records[] = $row;
                }
            }

            return $records;
        }
    }
}

?>