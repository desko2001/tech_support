<?php

require('../model/database.php');
include '../view/header.php';
// require('../model/product_db.php');
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Add Technician</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<div id ="main">
<main>
    <section>
        <h1>Add Technician</h1>
        <form action="add_technician.php" method="post"
              id="aligned">

            <label>First Name:</label>
            <input type="text" name="first_name"><br>

            <label>Last Name:</label>
            <input type="text" name="last_name"><br>
            
            <label>Email:</label>
            <input type="text" name="email"><br> 
            
            <label>Phone Number:</label>
            <input type="text" name="phone"><br>
            
            <label>Password:</label>
            <input type="text" name="password"><br>   
          
            <label>&nbsp;</label>
            <input type="submit" value="Add Technician"><br>
    </section>
    <p><a href="index.php">View Technician List</a></p>
</main>
</div>
</html>
<?php include '../view/footer.php'; ?>
