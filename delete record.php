<?php
// Database connection details
$host = 'localhost';
$dbname = 'staff_info';
$username = 'root';
$password = '';

// Create connection
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record
    try {
        $sql = "DELETE FROM staff WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':id' => $id]);

        header("Location: index.php"); // Redirect back to the form
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "No record ID provided.";
}
?>
