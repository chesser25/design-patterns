<?php
    class DatabaseConnection
    {
        /**
         * @var null|DatabaseConnection $connection
         */
        private static $connection = null;

        private function __construct() {}

        public static function getDatabaseConnection(): DatabaseConnection {
            if (self::$connection === null) {
                self::$connection = new DatabaseConnection();
            }

            return self::$connection;
        }

        public static function restoreDatabaseConnection(): void {
            if (self::$connection !== null) {
                self::$connection->disConnect();
                self::$connection = null;
            }
        }
        
        public function connect(): void {
            echo 'Connect to db' . '<br>';
        }

        public function disConnect(): void {
            echo 'Disconnect to db' . '<br>';
        }
    }
?>
