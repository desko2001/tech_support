<?php
require('../model/database.php');

// Get product code
$product_code = filter_input(INPUT_POST, 'product_code');

// Delete the product from the database
if ($product_code != false) {
    $query = 'DELETE FROM products
              WHERE productCode = :product_code';
        $statement = $db->prepare($query);
    $statement->bindValue(':product_code', $product_code);
    $success = $statement->execute();
    $statement->closeCursor(); 
}

// Display the Product List Page
include('index.php');