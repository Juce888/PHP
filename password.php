<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <h1>Password Checker</h1>
    <hr>
    <h3>This page uses a created function with string expressions, or RegEx, to decide 
        whether or not the password that is given is strong enough.
    </h3>
    <?php
        $passwords = ["ChocolateChip12", "CoffeeBeans2", "Vacation2021", "Audiophile37", "pAsswOrD1234",
        "BadPass", "Stinky", "Nuggets", "DontWOrk", "Huhh"];

        function checkPassword($password) {
            $pattern = "/[A-Za-z0-9]{12}/";
            if (preg_match($pattern, $password))
            return TRUE;
            else
            echo "<p>The password $password, is not a strong enough password.</p>";
        };

        foreach($passwords as $password) {
            $returnedPassword = checkPassword($password);
            if ($returnedPassword == TRUE)
            echo "<p>A valid password has been found! Password is: $password</p>";
        }
    ?>
</body>
</html>