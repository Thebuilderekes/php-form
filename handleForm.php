
<!-- handleForm.php -->
<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$dbname = "form_data";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Create a new PDO instance to connect to the database
    try {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $pdo = new PDO($dsn, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);

        // Get the form data from POST request
        $name = $_POST["name"];
        $plainPassword = $_POST["password"];

        // Hash the password for security
        $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

        // Prepare and execute the INSERT statement
        $stmt = $pdo->prepare(
            "INSERT INTO user_form_data (name, password) VALUES (:name, :password)"
        );
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":password", $hashedPassword);

        $stmt->execute();

        echo "Data inserted successfully!";
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}

