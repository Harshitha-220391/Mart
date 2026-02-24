<?php
require_once _DIR_ . '/../vendor/autoload.php';
require_once _DIR_ . '/../.env';

$mongoUri = getenv('MONGO_URI');

try {
    $client = new MongoDB\Client($mongoUri);
    $db = $client->selectDatabase('i_mongoDB'); // Database
    $usersCollection = $db->users; // Collection
} catch (Exception $e) {
    die("MongoDB Connection Failed: " . $e->getMessage());
}
?>