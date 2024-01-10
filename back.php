<?php
// index.php

// Simple API endpoint
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $response = ['message' => 'Hello, this is your PHP backend!'];
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'Invalid request method';
}
?>