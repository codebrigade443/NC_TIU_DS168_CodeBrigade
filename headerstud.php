<?php
include 'server.php';
?>

<!DOCTYPE html>
<html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>SIH</title>
        <link rel='stylesheet' href='main.css'>
    </head>

    <body>
        <div class='headerelememts'>

            <a href='logout.php'> <input type='button' value='Logout'></a>

            <a style='font-size:18x; color: #000' href='studentPage.php'><?php echo $_SESSION['user'];
?> </a>

            <a style='font-size:18x; color: #000' href='studentPage.php'>Home </div>

        </a>
    </body>

</html>