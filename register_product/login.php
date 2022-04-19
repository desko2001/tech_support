<?php
require('../model/database.php');
session_start();
$email_login = filter_input(INPUT_POST, 'email_login');
// Get Customer Data
$query = 'SELECT * FROM customers
         WHERE email = :email_login';
$statement = $db->prepare($query);
$statement->bindValue(':email_login', $email_login);
$statement->execute();
$_SESSION['results'] = $statement->fetchAll();
$results = $_SESSION['results'];
$statement->closeCursor();



if (empty($results)) {
    $error = "Invalid email. Check login email and try again.";
    include('../errors/error.php');
} else { foreach ($results as $result) {
    if ($result['email'] == FALSE || $result['email'] == NULL || empty($result['email'])) {
        $error = "Invalid email. Check login email and try again.";
        include('../errors/error.php');
        } else {
            $_SESSION['login'] = TRUE;
            session_regenerate_id();
            include('product_registration_form.php');
            }
    }
}
?>