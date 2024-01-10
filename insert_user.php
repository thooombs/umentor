<?php
// Include the database configuration file
require_once('db_config.php');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect user input
    $nome = $_POST['nome'];
    $curso = $_POST['curso'];
    $cor = $_POST['cor'];
    $comida = $_POST['comida'];

    // Prepare and execute the SQL query
    $query = "INSERT INTO users (nome, curso, cor, comida) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $nome, $curso, $cor, $comida);

    $response = [];

    if ($stmt->execute()) {
        $response['success'] = true;
        $response['message'] = 'User inserted successfully.';
        $response['user'] = ['nome' => $nome, 'curso' => $curso, 'cor' => $cor, 'comida' => $comida];
    } else {
        $response['success'] = false;
        $response['message'] = 'Error inserting user: ' . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();

    // Send a JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
} else {
    // If the request is not a POST request, return an error response
    $response = [
        'success' => false,
        'message' => 'Invalid request method.'
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}
?>
