<?php
    $dsn = 'mysql:host=tech-support.cv4tkmjfiroz.us-east-1.rds.amazonaws.com;dbname=tech_support';
    $username = 'admin';
    $password = 'password';
//    $dsn = 'mysql:host=localhost;dbname=tech_support';
//    $username = 'root';
//    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/error.php');
        exit();
    }
?>