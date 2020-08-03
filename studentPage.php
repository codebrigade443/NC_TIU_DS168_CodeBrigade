<?php
include 'headerstud.php';

?>

<!DOCTYPE html>
<html lang='en'>

    < <body>
        <h1 class='main_heading'>Student's Portal</h1>
        <p style="font-size:30px;text-align:center; color: #000"> Hi I'm <?php echo $_SESSION['user'];
?> </p>
        <div class='btn_div' style='margin-left:400px'>
            <button class='clk_btn' name='studentData'> <a href='studentPayments.php'>Pay Fees</a> </button>
            <button class='clk_btn' name='studentData'> <a href='tc.php'>Transfer Certificate</a> </button>
        </div>
        </body>

</html>