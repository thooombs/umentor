<?php
// Include the database configuration file
require_once('db_config.php');

// Assuming you have a 'users' table with columns: id, nome, curso, cor, comida
$query = "SELECT * FROM users";
$result = $conn->query($query);

if ($result) {
    // Fetch data from the result set as objects
    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }

    // Close the database connection
    $conn->close();

    // Return the fetched users or an empty array
    echo json_encode(['users' => $users]);
} else {
    // Handle query error
    echo json_encode(['error' => 'Error executing the query: ' . $conn->error]);

    // Log the error message
    error_log('Error executing the query: ' . $conn->error);

    // Close the database connection
    $conn->close();
    exit(); // Exit the script
}




?>


