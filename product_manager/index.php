<?php
require('../model/database.php');
include '../view/header.php';
// require('../model/product_db.php');

// Get all products
$queryProducts = "SELECT * FROM products";
$statement = $db->prepare($queryProducts);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Product Management</title>
    <link rel="stylesheet" href="main.css"/>
</head>

<!-- the body section -->
<div id="main">
<body>
    <header><h1>Product Manager</h1></header>
<main>
    <section>    
        <h2>Product List</h2>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Version</th>
                <th>Release Date</th>
                <th>&nbsp;</th>
            </tr>
            
            <?php foreach ($products as $product) : ?>
            <?php $date = $product['releaseDate'];
                  $releaseDate = date('n/j/Y', strtotime($date)); ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['version']; ?></td>
                <td><?php echo $releaseDate; ?></td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_code"
                           value="<?php echo $product['productCode']; ?>">
                    <input type ="submit" value ="Delete">
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_product_form.php">Add Product</a></p>
    </section>
</main>
</div>
</body>
</html>
<?php include '../view/footer.php'; ?>