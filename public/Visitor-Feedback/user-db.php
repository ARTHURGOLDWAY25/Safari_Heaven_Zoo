<?php

use MongoDB\Client;
use Dotenv\Dotenv;

// Include Composer's autoload file
require __DIR__ . '/../../vendor/autoload.php';
; 

// Directly specify the MongoDB URI for testing
$mongoUri = 'mongodb+srv://galexport08:zZdWBtdOeXG6bg2M@zoo-project-cluster.qvl73.mongodb.net/user_feedback?retryWrites=true&w=majority';

try {
    // Connect to MongoDB
    $client = new Client($mongoUri);
    $db = $client->user_feedback;
    $collection = $db->users;

    // Handle POST requests
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // CSRF Token Validation (Fixing typo)
        if (!isset($_POST["csrf_token"]) || $_POST["csrf_token"] !== $_SESSION["csrf_token"]) {
            die("Erreur CSRF - Requête interdite !");
        }

        // Sanitize inputs
        $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
        $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
        $textarea = filter_input(INPUT_POST, 'textarea', FILTER_SANITIZE_SPECIAL_CHARS);  
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        // Validate email and required fields
        if (!$first_name || !$last_name || !$textarea || !$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Please fill all fields correctly.";
            exit;
        }

        // Check if user already exists
        $existingUser = $collection->findOne(['email' => $email]);

        if ($existingUser) {
            echo "User already exists";
        } else {
            // Insert user data
            $result = $collection->insertOne([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'textarea' => $textarea,
                'email' => $email
            ]);

            if ($result->getInsertedId()) {
                echo "User added successfully";
            } else {
                echo "Server cannot process your request";
            }
        }
    } else {
        echo "Invalid request method";
    }

} catch (Exception $e) {
    echo "Could not connect to the database. Error: " . $e->getMessage();
}

?>



























 



