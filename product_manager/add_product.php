<?php
// Get the product data
$product_code = filter_input(INPUT_POST, 'product_code');
$name = filter_input(INPUT_POST, 'name');
$version = filter_input(INPUT_POST, 'version', FILTER_VALIDATE_FLOAT);
$date = filter_input(INPUT_POST, 'release_date');


// Regexp for date validation
$date_pattern = '/^((((0[13578])|([13578])|(1[02]))[\/](([1-9])|([0-2][0-9])|(3[01])))|(((0[469])|([469])|(11))[\/](([1-9])|([0-2][0-9])|(30)))|((2|02)[\/](([1-9])|([0-2][0-9]))))[\/]\d{4}$|^\d{4}$/';
$date_match = preg_match($date_pattern, $date);

switch ($date_match) {
    case 0:
        $error = "Invalid date. Check that the date is in a valid format and try again.";
        include('../errors/error.php');
        break;
    case 1:
        $release_date = date('Y-m-d H:i:s', strtotime($date));
if ($product_code == false || $name == false || $version == false ||
        $release_date == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('../errors/error.php');
} else {
        require_once('../model/database.php');
        
        // Add the product to the database
    $query = 'INSERT INTO products
                 (productCode, name, version, releaseDate)
              VALUES
                 (:product_code, :name, :version, :release_date)';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_code', $product_code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':version', $version);
    $statement->bindValue(':release_date', $release_date);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
        break;   
}






