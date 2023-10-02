<?php 

namespace App\Repositories;

use App\Connections\ConnectionFactory;
use PDO;
use PDOException;

class InstallationRepository {

    public PDO $connection;

    public function __construct()
    {
        $factory = new ConnectionFactory();
        $this->connection = $factory->getConnection();
    }

    public function createTables(){
        $sql = file_get_contents(__DIR__ . "/../../database.sql");
        $this->connection->exec($sql);
    }
}
