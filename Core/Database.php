<?php

namespace Core;

use PDO;

class Database {

    public $connection;
    
    public function __construct($config, $username = 'root', $password = 'dexter') {
        
        $dsn = 'mysql:' . http_build_query($config, '', ';');
                
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,            
        ]);
    }

    public function query($query) {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }    
}
