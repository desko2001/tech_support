<?php include '../view/header.php'; ?>
<main>

<div id='main'>
    <h2>Add</h2>
    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="add_customer">
        <input type="hidden" name="customer_id"">

        <label>First Name:</label>
        <input type="text" name="first_name">
        <?php echo $fields->getField('first_name')->getHTML(); ?>
        <br>

        <label>Last Name:</label>
        <input type="text" name="last_name">
        <?php echo $fields->getField('last_name')->getHTML(); ?>
        <br>

        <label>Address:</label>
        <input type="text" name="address" size="30">
        <?php echo $fields->getField('address')->getHTML(); ?>
        <br>

        <label>City:</label>
        <input type="text" name="city">
        <?php echo $fields->getField('city')->getHTML(); ?>
        <br>

        <label>State:</label>
        <input type="text" name="state">
        <?php echo $fields->getField('state')->getHTML(); ?>
        <br>

        <label>Postal Code:</label>
        <input type="text" name="postal_code">
        <?php echo $fields->getField('postal_code')->getHTML(); ?>
        <br>

        <label>Country:</label>
        <select name="country_code">
            <?php foreach ($countries as $country) : 
                if ($country_code == $country['countryCode']) {
                    $selected = 'selected';
                } else {
                    $selected = '';
                }
            ?>
            <option value="<?php echo htmlspecialchars($country['countryCode']); ?>" 
                <?php echo $selected; ?>>
                <?php echo htmlspecialchars($country['countryName']); ?>
            </option>
            <?php endforeach; ?>
        </select>
        <br>

        <label>Phone:</label>
        <input type="text" name="phone">
        <?php echo $fields->getField('phone')->getHTML(); ?>
        <br>

        <label>Email:</label>
        <input type="text" name="email" size="30">
        <?php echo $fields->getField('email')->getHTML(); ?>
        <br>

        <label>Password:</label>
        <input type="text" name="password">
        <?php echo $fields->getField('password')->getHTML(); ?>
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Customer">
        <br>
    </form>
    <p><a href="">Search Customers</a></p>
</div>
</main>
<?php include '../view/footer.php'; ?>