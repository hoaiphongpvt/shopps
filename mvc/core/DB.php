<?php

    class DB {

        public $conn;
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "mvc";

        function __construct() {
            $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        }
    }
?>