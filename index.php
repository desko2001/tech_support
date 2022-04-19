<?php include 'view/header.php';
session_start();
if (!isset($_SESSION['login'])) {
$_SESSION['login'] = FALSE;
}
?>

<head>
    <link rel="stylesheet" href="main.css" ->
</head>
<div id="main">
    <h2>Administrators</h2>
    <ul class="nav">
        <li><a href="product_manager">Manage Products</a></li>
        <li><a href="technichian_manager">Manage Technicians</a></li>
        <li><a href="customer_manager/">Manage Customers</a></li>
        <li><a href="incident_create/">Create Incident</a></li>
        <li><a href="incident_assign/">Assign Incident</a></li>
        <li><a href="incident_display/">Display Incidents</a></li>
    </ul>

    <h2>Technicians</h2>
    <ul class="nav">
        <li><a href="incident_update/">Update Incident</a></li>
    </ul>

    <h2>Customers</h2>
    <ul class="nav">
        <?php if ($_SESSION['login'] == FALSE) : ?>
        <li><a href="register_product/">Register Product</a></li>
        <?php elseif ($_SESSION['login'] == TRUE) : ?>
        <li><a href="register_product/product_registration_form.php">Register Product</a></li>
        <?php endif; ?>
    </ul>
</div>
<?php include 'view/footer.php'; ?>