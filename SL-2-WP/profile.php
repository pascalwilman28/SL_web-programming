<?php 
    session_start();
    include "config.php";

    if(isset($_SESSION['username']) != NULL){
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $query = mysqli_query($connection,$sql);

        $data = mysqli_fetch_array($query);
        $id_user = $data['id_user'];
        $firstname = $data['firstname'];
        $midname = $data['midname'];
        $lastname = $data['lastname'];
        $tempat = $data['tempat'];
        $ttl = $data['ttl'];
        $nik = $data['nik'];
        $warganegara = $data['warganegara'];
        $email = $data['email'];
        $nohp = $data['nohp'];
        $alamat = $data['alamat'];
        $pos = $data['pos'];
        $username = $data['username'];
        $password = $data['password'];
        $filename = $data['file'];

    }else{
        $message = 'Sorry, you must login first';

        echo "<script>
            alert('$message');
            window.location.replace('welcome.php');
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<header>
        <div class="nav-1">Aplikasi Pengelolaan Keuangan</div>
        <div class="nav-2">
            <a href="home.php">Home</a>
            <a href="profile.php" class="active">Profile</a>
        </div>
        <div class="nav-3">
            <a href="logout.php">Logout</a>
        </div>
</header>
<body>
    <h2 class="title">Profil Pribadi</h2>
    <center>
    <table width="90%" cellspacing="15px">
        <tr>
            <td width="10%">Nama Depan</td>
            <td><?php echo $firstname;?></td>
            <td width="10%">Nama Tengah</td>
            <td><?php echo $midname;?></td>
            <td width="11%">Nama Belakang</td>
            <td width="10%"><?php echo $lastname;?></td>
        </tr>
        <tr>
            <td width="9%">Tempat Lahir</td>
            <td><?php echo $tempat;?></td>
            <td width="10%">Tgl Lahir</td>
            <td><?php echo date_format(date_create($ttl),"d/m/Y");?></td>
            <td width="11%">NIK</td>
            <td><?php echo $nik;?></td>
        </tr>
        <tr>
            <td width="9%">Warga Negara</td>
            <td><?php echo $warganegara;?></td>
            <td width="10%">Email</td>
            <td><?php echo $email;?></td>
            <td width="11%">No HP</td>
            <td><?php echo $nohp;?></td>
        </tr>
        <tr>
            <td width="9%">Alamat</td>
            <td><?php echo $alamat;?></td>
            <td width="10%">Kode Pos</td>
            <td><?php echo $pos;?></td>
            <td width="11%">Foto Profil</td>
            <td><img src="files/<?php echo $filename;?>" width="150px" height="100px" alt=""></td>
        </tr>
    </table>
    <a href="EditProfile.php?id=<?php echo base64_encode($id_user);?>"><button>Edit Profile</button></a>
    </center>
</body>
</html>