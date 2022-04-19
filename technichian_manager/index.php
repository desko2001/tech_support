<?php
require('../model/database.php');
include '../view/header.php';
include '../model/technician.php';
include '../model/technician_db.php';
// require('../model/product_db.php');

// Get all technichians
$queryTechnicians = "SELECT * FROM technicians";
$statement = $db->prepare($queryTechnicians);
$statement->execute();
$technicians = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Technician Management</title>
    <link rel="stylesheet" href="main.css"/>
</head>

<!-- the body section -->
<div id="main">
<body>
    <header><h1>Technician Manager</h1></header>
<main>
    <section>    
        <h2>Technician List</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>&nbsp;</th>
            </tr>
            
            <?php foreach ($technicians as $technician) : ?>
            <tr>
                <td><?php echo Technician::getFullName($technician); ?></td>
                <td><?php echo $technician['email']; ?></td>
                <td><?php echo $technician['phone']; ?></td>
                <td><?php echo $technician['password']; ?></td>
                <td><form action="delete_technician.php" method="post">
                    <input type="hidden" name="tech_id"
                           value="<?php echo $technician['techID']; ?>">
                    <input type ="submit" value ="Delete">
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_technician_form.php">Add Technician</a></p>
    </section>
</main>
</div>
</body>
</html>
<?php include '../view/footer.php'; ?>