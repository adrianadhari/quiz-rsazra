<?php

$host = getenv("MARIADB_SERVICE_HOST");
$port = getenv("MARIADB_SERVICE_PORT");
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_NAME');

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
