<?php
class PDO_Connect {
    private $host_db;
    private $user_db;
    private $password_db;
    private $databaseName;
    private $port_db;
    private $connection;

    function __construct(){}

    public function setDatabaseConfig( 
        $db_config = [
            'host'=>'',
            'user'=>'',
            'password'=>'',
            'databaseName'=>'',
            'port'=>''
        ]

        ) {
        $this->host_db = $db_config['host'];
        $this->user_db = $db_config['user'];
        $this->password_db = $db_config['password'];
        $this->databaseName = $db_config['databaseName'];
        $this->port_db = $db_config['port'];
    }

    public function makeConnection(){
        try {
            $conn = new PDO("mysql:host={$this->host_db};dbname={$this->databaseName};port={$this->port_db}", $this->user_db, $this->password_db);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection = $conn;
          } catch(PDOException $e) {
            throw $e;
          }
    }
    public function getConnection(){
        return $this->connection;
    }   
    public function closeConnection(){
        $this->connection = null;
    }
}
