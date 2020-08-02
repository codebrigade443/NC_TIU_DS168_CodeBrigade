<?php
include 'header.php';

?>

<!DOCTYPE html>
<html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>

    <body>
        <h1>Hi I'm Student</h1>
        <p style="font-size:30px; color: #000"><?php echo $_SESSION['user'];
?> </p>
        <a href="logout.php"> <input type='button' value='Dashboard'></a>

        <a href="logout.php"> <input type='button' value='Logout'></a>

    </body>
    </body>

</html>