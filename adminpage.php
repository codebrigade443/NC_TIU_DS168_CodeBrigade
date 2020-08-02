<?php
include 'header.php';
// session_start();

?>

<!DOCTYPE html>
<html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>stanns</title>
    </head>

    <body>
        <h1 class='main_heading'>Admin Portal</h1>
        <p style='text-align:center; font-size:25px'>This is the website where admin can add students, payments and
            issue transfer certificate</p>
        <div class='btn_div'>
            <button class='clk_btn' name='studentData'> <a href='addstudent.php'>Add Students</a> </button>
            <button class='clk_btn' name='studentData'> <a href='paymentData.php'>Payments</a> </button>
            <button class='clk_btn' name='studentData'> <a href='transferData.php'>Transfer Certificates</a> </button>
            <button class='clk_btn' name='studentData'> <a href='studentsData.php'>Manage Admins</a> </button>
        </div>
    </body>

</html>