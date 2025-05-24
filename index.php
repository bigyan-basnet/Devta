<?php
// Set up database variables
$host = "localhost";
$user = "root";
$password = "";  // Use your DB password
$dbname = "test_db";

// Connect to database
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Display a welcome message
echo "<h1>Welcome to My PHP Website!</h1>";
echo "<p>Database connected successfully.</p>";

// Close connection
mysqli_close($conn);
?>
