<?php
    /*

    */
    include "../api/Database.php";
    Class TransactionUploader
    {
        //Instace Field
        private $db;
        private $conn;
        private $name;
        private $email;
        private $plateNumber;
        private $vehicleType;
        private $orderKey;
        private $packagedAvail;
        private $packagePrice;


        // Methods
        public function __construct()
        {
             $this->db = new Database();
             $this->conn = $this->db->getConnection();
        }

        public function upload()
        {
            $this->sessionRead();
            $this->uploadData();
        }

        private function sessionRead()
        {
            session_start();
            $this->name = $_SESSION["name"];
            $this->email = $_SESSION["email"];
            $this->plateNumber = $_SESSION["plate-number"];
            $this->vehicleType = $_SESSION["vehicle-type"];
            $this->packagedAvail = $_SESSION["package-avail"];
            $this->packagePrice = $_SESSION["package-price"];
        }

        private function uploadData()
        {

        }

    }
?>