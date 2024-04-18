<?php
function connetti() {
    $host = "localhost";$db_name = "dbStabilimentiBalneari";$port = 3306;$db_user = "root";
    try {
        $pdo = new PDO("mysql:host={$host};dbname={$db_name};port={$port}", $db_user);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        exit("Connection failed: " . $e->getMessage());
    }
}