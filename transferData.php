<?php
include 'header.php';

?>

<?php

if ( isset( $_POST['search'] ) )
 {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users_data` WHERE CONCAT(`id`, `name`, `year`, `course`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable( $query );

} else {
    $query = 'SELECT * FROM `users_data`';
    $search_result = filterTable( $query );
}

// function to connect and execute the query

function filterTable( $query )
 {
    $connect = mysqli_connect( 'localhost', 'root', '', 'feetech' );
    $filter_Result = mysqli_query( $connect, $query );
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>

    <head>
        <style>
        table,
        tr,
        th,
        td {

            border: 0px;
        }

        td {
            width: 400px;
            text-align: center;
            text-teansform: uppercase;
        }
        </style>
    </head>

    <body>

        <form action='transferData.php' style='padding:100px' method='post'>
            <input type='text'
                style='width:500px; height:40px; margin-left:250px;border:1px solid #cacaca; border-radius:5px; text-indent:20px'
                name='valueToSearch' placeholder='Value To Search'>
            <input type='submit'
                style='width:100px; height:40px; color:#fff; background-color: #ff5f5f; border:0px; border-radius:5px; outline:none'
                name='search' value='Search'><br>

            <table>
                <tr>
                    <td>Id</td>
                    <td>name</td>
                    <td>Year</td>
                    <td>Course</td>
                    <td>Action</td>
                </tr>

                <!-- populate table from mysql database -->
                <?php while( $row = mysqli_fetch_array( $search_result ) ):?>
                <tr>
                    <td><?php echo $row['id'];
?></td>
                    <td><?php echo $row['name'];
?></td>
                    <td><?php echo $row['year'];
?></td>
                    <td><?php echo $row['course'];
?></td>
                    <td><button type='submit1'>Issue TC</button></td>
                </tr>
                <?php endwhile;
?>
            </table>
        </form>

    </body>

</html>