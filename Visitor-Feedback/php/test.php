<?php

use MongoDB\Client;

require "vendor/autoload.php"; // Make sure this path is correct

$client = new Client("mongodb://localhost:27017");
$db = $client->database; // Replace with your actual database name
$collection = $db->users; // Replace with your actual collection name

$insertUser = $collection->insertOne([
    'name' => 'John',
    'age' => 30,
    'email' => 'email@email.com',
]);

if ($insertUser->getInsertedCount() === 1) {
    echo "User successfully inserted";
} else {
    echo "New user cannot be added to the database";
}

