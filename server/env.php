<?php
// Path to your .env file (adjust the path as per your setup)
$envFilePath = '/var/www/html/.env';

// Check if the .env file exists
if (!file_exists($envFilePath)) {
    die('.env file not found');
}

// Read the .env file line by line
$lines = file($envFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Initialize an array to store environment variables
$envVars = [];

foreach ($lines as $line) {
    // Ignore comments (lines starting with #) and empty lines
    if (strpos(trim($line), '#') === 0 || empty($line)) {
        continue;
    }

    // Split each line by the first occurrence of '='
    list($key, $value) = explode('=', $line, 2);

    // Trim whitespace and quotes from key and value
    $key = trim($key);
    $value = trim($value, "\"'");

    // Set environment variable
    putenv("$key=$value");
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;

    // Optionally, store in an array for later use
    $envVars[$key] = $value;
}
?>
