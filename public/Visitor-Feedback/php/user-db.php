<?php

use MongoDB\Client;
use Dotenv\Dotenv;

// Include Composer's autoload file
require 'vendor/autoload.php'; // Ensure this path is correct

// Load environment variables from .env file in the same directory
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Get MongoDB URI from environment variable
$mongo_uri = getenv('MONGODB_URI');
if ($mongo_uri === false) {
    die('MongoDB URI is not set in the environment file.');
}

// Connect to MongoDB
$client = new Client("mongodb+srv://galexport08:zZdWBtdOeXG6bg2M@zoo-project-cluster.qvl73.mongodb.net/user_feedback?retryWrites=true&w=majority"); // Use the URI from the environment variable

// Select the database and collection
$db = $client->user_feedback; // Match the database name you intend to use
$collection = $db->users;     // Match the collection name you intend to use

// Handle POST requests
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $textarea = filter_input(INPUT_POST, 'textarea', FILTER_SANITIZE_SPECIAL_CHARS);  
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    if ($email === false || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address";
    } else {
        // Check if user already exists
        $existingUser = $collection->findOne(['email' => $email]);

        if ($existingUser) {
            echo "User already exists";
        } else {
            // Insert user data
            $document = $collection->insertOne([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'textarea' => $textarea,
                'email' => $email
            ]);

            if ($document->getInsertedCount() === 1) {
                echo "User added successfully";
            } else {
                echo "Server cannot process your request";
            }
        }
    }
} else {
    echo "Invalid request method";
}

?>






