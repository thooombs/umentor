
<?php
// db_config.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "mysql25-farm10.kinghost.net";
$username = "sagapc";
$password = "password"; // Using getenv function
$dbname = "sagapc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




?>
