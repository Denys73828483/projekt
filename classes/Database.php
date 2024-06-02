<?php
    class Database{
        private $host = 'localhost';
        private $db_name = 'pekaren';
        private $user_name = 'root';
        private $password = '';

        protected function make_connection(){
            try{
            $connection = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user_name, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

            return $connection;
            }
            catch(PDOException $e){
                die("Chyba prepojenia k databaze: ".$e->getMessage());
            }
        } 
        
    }
?>