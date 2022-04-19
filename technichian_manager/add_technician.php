<?php

// Get the product data
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$tech_password = filter_input(INPUT_POST, 'password');

if ($first_name == false || $last_name == false || $email == false ||
        $phone == false || $tech_password == false) {
    $error = "Invalid technician data. Check all fields and try again.";
    include('../errors/error.php');
} else {
        require_once('../model/database.php');
        
        // Add the product to the database
    $query = 'INSERT INTO technicians
                 (firstName, lastName, email, phone, password)
              VALUES
                 (:first_name, :last_name, :email, :phone, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':password', $tech_password);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}


