<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<header>
        <div class="nav-1">Aplikasi Pengelolaan Keuangan</div>
        <div class="nav-2">
            <a href="home.php" class="active">Home</a>
            <a href="profile.php">Profile</a>
        </div>
        <div class="nav-3">
            <a href="logout.php">Logout</a>
        </div>
</header>
<body>
   <div class="content">
           <?php 
            session_start();
            include "config.php";
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM user WHERE username = '$username'";
            $query = mysqli_query($connection,$sql);

            $data = mysqli_fetch_array($query);
            if(isset($_SESSION['username']) != NULL){
                echo "Halo <b>".$data['firstname']. " ". $data['midname']. " ". $data['lastname']. " </b>, Selamat datang di Aplikasi Pengelolaan Keuangan";
            }else{
                $message = 'Sorry, you must login first';

                echo "<script>
                    alert('$message');
                    window.location.replace('welcome.php');
                </script>";
            }
           ?>
   </div>
</html>