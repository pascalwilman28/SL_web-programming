<?php
    session_start();

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(isset($_SESSION['username']) == NULL){
            $message = 'Login Failed, username or password not registered yet!';

            echo "<script>
                alert('$message');
                window.location.replace('login.php');
            </script>";
        }else if($username == $_SESSION['username'] && $password == $_SESSION['password']){
            $message = 'Login Success';

            echo "<script>
                alert('$message');
                window.location.replace('home.php');
            </script>";
        }else{
            $message = 'Login Failed, username or password mismatch!';
     
            echo "<script>
                alert('$message');
                window.location.replace('login.php');
            </script>";
        }
    }else{
        $message = 'Login Failed!';

        echo "<script>
            alert('$message');
            window.location.replace('login.php');
        </script>";
    }
?>