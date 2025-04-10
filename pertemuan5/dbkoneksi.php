<?php 

$host = "localhost";
$dbname = "dbpuskesmas";
$user = "root";
$pass = "";
$charset = "utf8mb4";

$dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    ];
try {
    $db = new PDO($dsn, $user, $pass, $opt);
} catch (\Throwable $e) {
    echo "Connection error: " .  $e;
}    

