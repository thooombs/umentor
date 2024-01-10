<?php
// Include the database configuration file
require_once('db_config.php');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect user input
    $user_id_ = $_POST['user_id_'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_admissao = $_POST['data_admissao'];
    $data_insercao = $_POST['data_insercao'];
    $data_atualizacao = $_POST['data_atualizacao'];

    // Prepare and execute the SQL query
    $query = "INSERT INTO users (user_id_, nome, email, data_admissao, data_insercao, data_atualizacao) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssss", $user_id_, $nome, $email, $data_admissao, $data_insercao, $data_atualizacao);

    $response = [];

    if ($stmt->execute()) {
        $response['success'] = true;
        $response['message'] = 'User inserted successfully.';
        $response['user'] = ['user_id_' => $user_id_, 'nome' => $nome, 'email' => $email, 'data_admissao' => $data_admissao, 'data_insercao' => $data_insercao, 'data_atualizacao' => $data_atualizacao];
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
