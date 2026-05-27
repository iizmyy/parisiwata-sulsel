<?php
    session_start();

    $username = $_POST['username'];
    // $password = md5($_POST['password']);

    if(($_POST['username']=="") && ($_POST['password']=="") ){
        echo "<script>alert('Username dan Password belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    } else{
        //user = "admin" & password = "admin123"
        if (($_POST['username']=="admin") && ($_POST['password']=="admin123")) {
            $_SESSION['login']=1;
            $_SESSION['username']=$_POST['username'];
        }

        if((isset($_SESSION['login'])) && ($_SESSION['login']==1)){
            header('location:index.php');
        } else{
            echo "<script>alert('Login Gagal, Silahkan Coba Lagi')</script>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
        }
    }
?>