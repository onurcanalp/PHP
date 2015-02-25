<?php
/*
* Mysql database class - Only Connection
* Onur Canalp
*/
class Database {
        private $connection;
        private static $instance;
        private $_host = "localhost";
        private $_username = "root";
        private $_password = "****";
        private $_database = "onur";

        public static function getInstance() {
                if(!self::$instance) {
                        self::$instance = new self();
                }
                return self::$instance;
        }

        // Constructor
        private function __construct() {
                $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

                if(mysqli_connect_error()) {
                        trigger_error("Hata: " . mysql_connect_error(), E_USER_ERROR);
                }
        }

        // klonlanamasın
        private function __clone() { }

        public function getConnection() {
                return $this->connection;
        }
}

//ÖRNEK KULLANIM
$db = Database::getInstance();
$mysqli = $db->getConnection();
$sql_query = "SELECT isim FROM kisiler";
$result = $mysqli->query($sql_query);
?>

