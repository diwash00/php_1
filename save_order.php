<?php
class Database {
    // Database configuration
    private $servername = "172.31.22.43";
    private $username = "Diwash200542953";
    private $password = "x6v00OkCZl";
    private $dbname = "Diwash200542953";
    private $conn;

    public function __construct() {
        // Create a connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insertOrder($name, $address, $contact, $pizza, $size, $toppings) {
        // Prepare the SQL statement with placeholders
        $sql = "INSERT INTO orders (name, address, contact, pizza, size, toppings) VALUES (?, ?, ?, ?, ?, ?)";

        // Create a prepared statement
        $stmt = $this->conn->prepare($sql);

        // Bind the parameters to the prepared statement
        $stmt->bind_param("ssssss", $name, $address, $contact, $pizza, $size, $toppings);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Order placed successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    }

    public function closeConnection() {
        // Close the connection
        $this->conn->close();
    }
}

// Create an instance of the Database class
$database = new Database();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve data from the form
    if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['contact']) && isset($_POST['pizza']) && isset($_POST['size']) && isset($_POST['toppings'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $pizza = $_POST['pizza'];
        $size = $_POST['size'];
        $toppings = $_POST['toppings'];

        // Call the insertOrder method to insert the data
        $database->insertOrder($name, $address, $contact, $pizza, $size, $toppings);

        // Display the submitted data
        echo "<h2>Submitted Data:</h2>";
        echo "<p>Customer Name: " . $name . "</p>";
        echo "<p>Address: " . $address . "</p>";
        echo "<p>Contact Number: " . $contact . "</p>";
        echo "<p>Pizza Name: " . $pizza . "</p>";
        echo "<p>Pizza Size: " . $size . "</p>";
        echo "<p>Toppings: " . $toppings . "</p>";
    } else {
        echo "Error: Invalid form data.";
    }
}

// Close the database connection
$database->closeConnection();
?>
