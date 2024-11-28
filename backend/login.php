<?php

            if(isset($_POST["email"]) && isset($_POST["password"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
    
                if($email == 'admin123@gmail.com' && $password == 'admin') {
                    header('Location: ./../beranda.php');
                }
                    else {
                        header('Location: ./../wrong.php');
                    }
            

        }
   
 ?>
 =======

session_start();


main
require './../config/db.php';

if(isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = mysqli_query($db_connect,"SELECT * FROM users WHERE email = '$email'");
    if(mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);
        
        if(password_verify($password,$data['password'])) {
pertemuan-7

            //otorisasi
            $_SESSION['name'] = $data['name'];
            $_SESSION['role'] = $data['role'];

            if($_SESSION['role'] == 'admin') {

                header('Location:./../admin.php');
            } else {
                header('Location:./../profile.php');
            }



            echo "selamat datang ".$data['name'];
            die;

            //otorisasimain
        } else {
            echo "password salah";
            die;
        }

    } else {
        echo "email atau password salah";
        die;
    }
}

?>

?>
main

