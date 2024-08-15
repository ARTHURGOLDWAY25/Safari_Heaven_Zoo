<?php
// Load environment variables
require 'vendor/autoload.php'; // If you're using Composer

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Get MongoDB URI from environment variable
$mongo_uri = getenv('MONGODB_URI');

echo "MongoDB URI: " . htmlspecialchars($mongo_uri);
?>
