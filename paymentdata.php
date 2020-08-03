<?php
// session_start();
include 'header.php';

?>
<h1 class='main_heading'> Students Data</h1>
<p style='padding-left:450px'>
    <lable>Choose course</lable>
    <select name='' class='input_course'>
        <option value='1'>Bachelor of Commerce - General</option>
        <option value='2'>Bachelor of Commerce - Honours</option>
        <option value='3'>Bachelor of Computer Science</option>
    </select>
</p>
<table>

    <thead class='tabbody'>
        <tr>
            <td>HTNo.</td>
            <td>Name</td>
            <td>Email</td>
            <td>Mobile</td>
            <td>Year</td>
            <td>Payment Details</td>
            <td>Operations</td>
        </tr>
    </thead>

    <?php
$checkAccount = 'SELECT * from users_data, sutdentdetails where role = 1';
$row = mysqli_query( $con, $checkAccount );

$nums = mysqli_num_rows( $row );
while( $data = mysqli_fetch_array( $row ) )
 {
    ?>

    <tbody class='tabbody'>
        <tr>
            <td><?php echo $data['id'];
    ?></td>
            <td><?php echo $data['name'];
    ?></td>
            <td><?php echo $data['email'];
    ?></td>
            <td><?php echo $data['mobile'];
    ?></td>
            <td><?php echo $data['year'];
    ?></td>
            <td><?php echo $data['pd'];
    ?></td>
            <td><?php echo $data['course'];
    ?></td>
        </tr>
        <!-- </tbody> -->
        <?php

}
?>
</table>