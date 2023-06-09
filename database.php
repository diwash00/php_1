<?php
class database{
    // Database connection credentials
    private $host ='172.31.22.43';
    private $username = 'Diwash200542953';
    private $password = 'x6v00OkCZl';
    private $database = 'Diwash200542953';
    protected $connection;

    public function __construct(){
        // Check if connection is not already established
        if(!isset($this->connection)){
            // Create a new MySQLi object and establish connection
            $this->connection = new mysqli($this ->host, $this->username, $this->password, $this->database);

            // Check if connection is successful
            if(!$this->connection){
                echo '<p>Cannot connect to database!!</p>';
                exit;
            }
        }
        // Return the connection object
        return $this->connection;
    }
}
?>
