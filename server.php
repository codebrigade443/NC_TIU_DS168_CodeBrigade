<?php

// Create connection
$con = mysqli_connect( '127.0.0.1', 'root', '', 'feetech' );

if ( $con ) {

    // Login Screen Starts

    if ( isset( $_POST['login'] ) ) {
        $htno = $_POST['htno'];
        $pwd = md5( $_POST['password'] );

        $checkAccount = "SELECT * from users_data where id='$htno' AND password='$pwd' AND role = 1";
        $row = mysqli_query( $con, $checkAccount );

        if ( mysqli_num_rows( $row )>0 ) {
            header( 'location: studentPage.html' );
        } else {
            $checkAccount = "SELECT * from users_data where id='$htno' AND password='$pwd' AND role = 2";
            $row = mysqli_query( $con, $checkAccount );

            if ( mysqli_num_rows( $row )>0 ) {

                header( 'location: adminPage.html' );
            } else {
                header( ' location: error.html' );

            }
        }

    }
    // Login Screen Ends

    // Register Screen Starts
    if ( isset( $_POST['register'] ) ) {

        $htno = $_POST['htno'];
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $pwd = md5( $_POST['password'] );

        $checkAccount = "SELECT * from users_data where id='$htno'";
        $row = mysqli_query( $con, $checkAccount );
        // var_dump( $checkAccount );

        if ( mysqli_num_rows( $row )>0 ) {
            echo 'Account already exists';
            header( 'location: ' );
        } else {

            $createAccount = "INSERT INTO `users_data`(`id`, `name`, `mobile`, `email`, `role`, `password`) VALUES ('$htno', '$name', $mobile, '$email', $role, '$pwd' )";
            $row = mysqli_query( $con, $createAccount );
            if ( $role == 1 ) {
                header( 'location: studentPage.html' );
            } else {
                header( 'location: AdminPage.html' );

            }

        }
    }
    // Register Screen Ends

}

?>
© 2020 GitHub, Inc.
