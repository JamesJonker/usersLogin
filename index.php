<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="login.php" method="post">
            <h2>Login</h2>
            <?php if(isset($_GET['error'])) { ?> 
                <p class="error"><?php echo $_GET['error'];?> </p>
            <?php } ?>
            <Label>User Name</Label>
            <input type="text" name="user_name" placeholder="User Name"><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>
            <button type="submit">Login</button>
        </form>
    </body>
</html>