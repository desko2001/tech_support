<?php
require('../model/database.php');
include '../view/header.php';
if (!isset($_SESSION['login'])) {
    session_start();
}

$queryProductCodes = 'SELECT * FROM products';
$statement = $db->prepare($queryProductCodes);
$statement->execute();
$productCodes = $statement->fetchAll();
$statement->closeCursor();

$results = $_SESSION['results'];
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
        <form action="product_register.php" method="post" id="aligned">

            <label>Customer:</label>
            <?php foreach ($results as $result) : ?>
            <label><?php echo $result['firstName'], ' ', $result['lastName']; ?></label><br>
            <input type="hidden" name="customer_id"
                   value="<?php echo $result['customerID']; ?>">
            <?php endforeach; ?>
            
            <label>Product::</label>
            <select name="product_code">
            <?php foreach ($productCodes as $product_code) : ?>
                <option value="<?php echo $product_code['productCode']; ?>">
                    <?php echo $product_code['name']; ?>
                </option>
            <?php endforeach; ?>
            </select><br>

            <input type="submit" value="Register Product">          
        </form>
        
        <?php foreach ($results as $result) : ?>
        <p>You are logged in as <?php echo $result['email']; ?></p>
        <form action="logout.php" method="post">
            <input type="submit" value="Logout">
        <?php endforeach; ?>
        
    </body>
</div>
</html>
<?php include '../view/footer.php'; ?>