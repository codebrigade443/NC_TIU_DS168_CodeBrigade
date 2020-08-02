<?php

session_start();

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
            $data = mysqli_fetch_assoc( $row );
            $_SESSION['user'] = $data['name'] ;
            header( 'location: studentPage.php' );

        } else {
            $checkAccount = "SELECT * from users_data where id='$htno' AND password='$pwd' AND role = 2";
            $row = mysqli_query( $con, $checkAccount );

            if ( mysqli_num_rows( $row )>0 ) {
                $data = mysqli_fetch_assoc( $row );
                $_SESSION['user'] = $data['name'] ;
                // var_dump( $data['name'] );

                header( 'location: adminPage.php' );
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
            header( 'location: index.php' );
        } else {

            $createAccount = "INSERT INTO `users_data`(`id`, `name`, `mobile`, `email`, `role`, `password`) VALUES ('$htno', '$name', $mobile, '$email', $role, '$pwd' )";
            $row = mysqli_query( $con, $createAccount );
            if ( $role == 1 ) {
                $data = mysqli_fetch_assoc( $row );
                $_SESSION['user'] = $data['name'] ;
                header( 'location: studentPage.php' );
                // $_SESSION['user'] = $_POST['name'] ;
            } else  if ( $role == 2 ) {
                $data = mysqli_fetch_assoc( $row );
                $_SESSION['user'] = $data['name'] ;
                header( 'location: adminPage.php' );

            }

        }
    }
    // Register Screen Ends

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
            header( 'location: index.php' );
        } else {

            $createAccount = "INSERT INTO `users_data`(`id`, `name`, `mobile`, `email`, `role`, `password`) VALUES ('$htno', '$name', $mobile, '$email', $role, '$pwd' )";
            $row = mysqli_query( $con, $createAccount );
            if ( $role == 1 ) {
                $data = mysqli_fetch_assoc( $row );
                $_SESSION['user'] = $data['name'] ;
                header( 'location: studentPage.php' );
                // $_SESSION['user'] = $_POST['name'] ;
            } else  if ( $role == 2 ) {
                $data = mysqli_fetch_assoc( $row );
                $_SESSION['user'] = $data['name'] ;
                header( 'location: adminPage.php' );

            }

        }
    }

    if ( isset( $_POST['addstud'] ) ) {

        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];
        $e = $_POST['e'];
        $f = $_POST['f'];
        $g = $_POST['g'];
        $h = $_POST['h'];
        $i = $_POST['i'];
        $j = $_POST['j'];

        $checkAccount = "SELECT * from users_data where id='$b'";
        $row = mysqli_query( $con, $checkAccount );
        // var_dump( $checkAccount );

        if ( mysqli_num_rows( $row )>0 ) {
            echo 'Account already exists';
        } else {

            $createAccount = "INSERT INTO `users_data`(`id`, `name`, `mobile`, `email`, `role`, `password`) VALUES ('$htno', '$name', $mobile, '$email', $role, '$pwd' )";
            $row = mysqli_query( $con, $createAccount );

        }

    }
}

?>