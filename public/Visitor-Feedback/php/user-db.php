<?php

use MongoDB\Client;
use Dotenv\Dotenv;

require 'vendor/autoload.php';


// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Get MongoDB URI from environment variable
$mongo_uri = getenv('MONGODB_URI');

$client = new Client($mongo_uri);
$db = $client->user_feedback;
$collection = $db->users;

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


