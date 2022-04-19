<?php
include '../view/header.php';
$product_code = filter_input(INPUT_POST, 'product_code');
$customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
$registration_date = date("Y-m-d H:i:s");

if ($product_code == NULL || $customer_id == NULL || $registration_date == NULL) {
    $error = "Unknown error.";
    include('../errors/error.php');
} else {
require_once('../model/database.php');
$queryRegisterProduct = 'INSERT INTO registrations
                         (customerID, productCode, registrationDate)
                         
                         VALUES
                         (:customer_id, :product_code, :registration_date)';
$statement = $db->prepare($queryRegisterProduct);
$statement->bindValue(':customer_id', $customer_id);
$statement->bindValue(':product_code', $product_code);
$statement->bindValue(':registration_date', $registration_date);
$statement->execute();
$statement->closeCursor();
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Product Registration</title>
    <link rel="stylesheet" href="../main.css"/>
    </head>
<div id="main">
    <body>
        <h2>Register Product</h2>
        <p>Product <?php echo $product_code; ?> was registered successfully</p>        
    </body>
</div>
<?php include('../view/footer.php'); ?>