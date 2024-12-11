<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php 
        $isLogin = false;
        $username = null;
        function login($username) {
            if ($username == null) {
                echo "Whoops, You need to enter your Username!";
            } else {
                $isLogin = true;
                echo "Welcome ", $username, "!"; 
            }
        }
    ?>
    <h1>Login</h1>
    <input type="text">
    <?php
        $name = "I'm not sure how to do this as a user input";
        login($name)
    ?>
</body>
</html>