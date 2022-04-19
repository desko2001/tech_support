<?php
require('../model/database.php');
include '../view/header.php';
// require('../model/product_db.php');
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<div id ="main">
<main>
        <h1>Add Product</h1>
        <form action="add_product.php" method="post"
              id="aligned">
            
            <label>Code:</label>
            <input type="text" name="product_code"><br>

            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>Version:</label>
            <input type="text" name="version"><br>
            
            <label>Release Date:</label>
            <input type="text" name="release_date"><p>Use any valid date format</p>         
          
            <label>&nbsp;</label>
            <input type="submit" value="Add Product"><br>
    <p><a href="index.php">View Product List</a></p>
</main>
</div>
</html>
<?php include '../view/footer.php'; ?>
