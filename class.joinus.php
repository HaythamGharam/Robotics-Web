<?php 
    include_once("dbconfig.php");
    class Joinus{
        public $db;
        public function __construct(){
            $this->db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
            if(mysqli_connect_errno()){
                echo'could not connect to Database';
                exit;
            }
        }
        public function ImageUpload(){
            
        }
    }

?> 