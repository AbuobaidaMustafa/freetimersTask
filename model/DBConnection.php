<?php

class Connection {

    public $connection;

    function __construct() {
        $this->getConnection();
    }

    function close() {
        $this->connection->close();
    }

    // getConnection, used for Database classes to initialize database connection
    public function getConnection() {

        try {

            // Create connection
            $connection = new mysqli("localhost", "root", "", "test", "3306");

            if (!$connection) {
                General::writeEvent("Error in get Connection " . $connection);
                die('error: 9910!' . $connection->error);
            } else {
                //to read arabic
                mysqli_set_charset($connection, 'utf8');
                //mysqli_query($connection, "SET CHARACTER_SET utf8;");
                //mysqli_select_db($connection,$database); 
                $this->connection = $connection;
            }
        } catch (Exception $exception) {
            $lastError = $exception->getMessage();
            General::writeEvent($lastError);
        }

        return $this->connection;
    }

}
