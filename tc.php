<?php
include 'headerstud.php';

// $mpdf = new \Mpdf\Mpdf();
$name = $_SESSION['user'];
$checkAccount = "SELECT * from users_data u,sutdentdetails s where u.name='$name' AND u.id = s.htno";
$row = mysqli_query( $con, $checkAccount );
var_dump( $checkAccount );

if ( mysqli_num_rows( $row )>0 ) {
    $data = mysqli_fetch_assoc( $row );
    $_SESSION['username'] = $data['id'] ;
    $fname = $data['fname'] ;
    $mname = $data['mname'] ;
    $dob = $data['dob'] ;
    $doa = $data['doa'] ;
    $htno = $data['htno'] ;
    $lca = $data['lca'] ;
    $sc = $data['sc'] ;
    $cc = $data['cc'] ;
    $gc = $data['gc'] ;

} else {
    echo 'No Data Found!!!';
}
?>

<!DOCTYPE html>
<html lang='en'>

    <body>

        <h1 class='main_heading'>Andaman College</h1>
        <h4 class='main_heading' style='font-size:25px;text-decoration: underline'>Transfer Certificate</h1>
            <table>
                <tr>
                    <td>Name</td>
                    <td><?php echo $_SESSION['user']?></td>
                </tr>
                <tr>
                    <td>Father's Name</td>
                    <td><?php echo $fname ?></td>
                </tr>
                <tr>
                    <td>Mother's Name</td>
                    <td><?php echo $mname ?></td>
                </tr>
                <tr>
                    <td>DOB</td>
                    <td><?php echo $dob ?></td>
                </tr>
                <tr>
                    <td>DOA</td>
                    <td><?php echo $doa ?></td>
                </tr>
                <tr>
                    <td>Admission Number</td>
                    <td><?php echo $htno ?></td>
                </tr>
                <tr>
                    <td>Last Class Attented</td>
                    <td><?php echo $lca ?></td>
                </tr>
                <tr>
                    <td>Course</td>
                    <td><?php echo $sc ?></td>
                </tr>
                <tr>
                    <td> Course Completed</td>
                    <td><?php echo $cc ?></td>
                </tr>
                <tr>
                    <td> General Conduct</td>
                    <td><?php echo $gc ?></td>
                </tr>
            </table>

    </body>

    <style>
    table {
        padding-left: 400px
    }

    td {
        width: 500px;
        height: 45px;
    }
    </style>

</html>
