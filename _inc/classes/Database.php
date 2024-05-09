<?php

    class Database{

        private $host = 'localhost';
        private $db_name = 'login';
        private $user_name = 'root';
        private $password = '';
    
        protected $connection;

    
        public function __destruct() {
            // Uzatvorenie spojenia s databázou
            $this->connection = null;
        }

        protected function connect() {
            try {
                $this->connection = new PDO(
                    "mysql:host=" . $this->host . 
                    ";dbname=" . $this->db_name . 
                    ";charset=utf8", 
                    $this->user_name, 
                    $this->password
                );
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                return $this->connection;
            } catch(PDOException $e) {
                die("Chyba pripojenia k databáze: " . $e->getMessage());
            }
        }
        
        

    }


?>