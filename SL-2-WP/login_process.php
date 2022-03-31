<?php
    session_start();
    include "config.php";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = base64_encode($_POST['password']);

        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $query = mysqli_query($connection,$sql);
        $data = mysqli_fetch_array($query);

        if($data != NULL){
            $message = 'Login Success';
            $_SESSION['username'] = $username;
            echo "<script>
                alert('$message');
                window.location.replace('home.php');
            </script>";
        }else{
            $message = 'Login Failed, username or password mismatch!';
            
            // echo "<script>
            //     alert('$message');
            //     window.location.replace('login.php');
            // </script>";
        }
    }else{
        $message = 'Login Failed!';

        echo "<script>
            alert('$message');
            window.location.replace('login.php');
        </script>";
    }
?>