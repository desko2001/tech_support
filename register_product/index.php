<?php include '../view/header.php';
session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../main.css"/>
    </head>
    <div id="main">
    <body>
        <h2>Customer Login</h2>
        
        <p>You must login before you can register a product</p>
        <form action="login.php" method="post" id="aligned">
            <input type="text" name="email_login">
            <input type="submit" value="Login">
        </form>
    </body>
    </div>
</html>
<?php include '../view/footer.php'; ?>
