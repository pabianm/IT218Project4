<?php
$dsn = 'mysql:host=sql.njit.edu;dbname=mjp86';
$username = 'mjp86';
$password = 'aeD1lVfF';
try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
    exit();
}
?>