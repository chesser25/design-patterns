<?php
    require_once 'DatabaseConnection.php';

    $databaseConnection = DatabaseConnection::getDatabaseConnection();

    class FirstService
    {
        private DatabaseConnection $conn;
        public function __construct(DatabaseConnection $conn)
        {
            $this->conn = $conn;
            $this->conn->connect();
        }

        public function __destruct()
        {
            $this->conn->disConnect();
        }
    }

    class SecondService
    {
        private DatabaseConnection $conn;
        public function __construct(DatabaseConnection $conn)
        {
            $this->conn = $conn;
            $this->conn->connect();
        }

        public function __destruct()
        {
            $this->conn->disConnect();
        }
    }

    new FirstService($databaseConnection);
    new SecondService($databaseConnection);
?>
