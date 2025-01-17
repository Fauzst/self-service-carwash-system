<?php
include 'Database.php';
    class PackageReader
    {
        private $db;
        private $conn;
        public $data = [];

        public function __construct()
        {
            $this->db = new Database();
            $this->conn = $this->db->getConnection(); 
        }

        private function getPackages($vehicle)
        {
            $sql = $this->conn->prepare("SELECT * FROM packages WHERE vehicleType = ?");
            $sql->bind_param("s",$vehicle);
            $sql->execute();

            $result = $sql->get_result();

            while ($row = $result->fetch_assoc())
            {
                $this->data[] = $row;
            }

            $sql->close();
        }

        public function getDataPackages($inp)
        {
            $this->getPackages($inp);
            return $this->data;
        }
    }
?>