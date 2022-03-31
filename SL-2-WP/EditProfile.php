<?php 
    session_start();
    include "config.php";

    if(isset($_SESSION['username']) != NULL){
        $id = base64_decode($_GET['id']);
        $sql = "SELECT * FROM user WHERE id_user = '$id'";
        $query = mysqli_query($connection,$sql);

        $data = mysqli_fetch_array($query);
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
    <title>Edit Profile</title>
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
    <h2 class="title">Edit Profil Pribadi</h2>
    <center>
    <form action="update_process.php" method="post" enctype="multipart/form-data">
    <table width="90%" cellspacing="15px">
        <tr>
            <td width="10%">Nama Depan</td>
            <td><input type="text" name="firstname" value="<?php echo $firstname;?>"></td>
            <td width="10%">Nama Tengah</td>
            <td><input type="text" name="midname" value="<?php echo $midname;?>"></td>
            <td width="11%">Nama Belakang</td>
            <td width="10%"><input type="text" name="lastname" value="<?php echo $lastname;?>"></td>
        </tr>
        <tr>
            <td width="9%">Tempat Lahir</td>
            <td><input type="text" name="tempat" value="<?php echo $tempat;?>"></td>
            <td width="10%">Tgl Lahir</td>
            <td><input type="date" name="ttl" value="<?php echo $ttl;?>"></td>
            <td width="11%">NIK</td>
            <td><input type="text" name="nik" value="<?php echo $nik;?>"></td>
        </tr>
        <tr>
            <td width="9%">Warga Negara</td>
            <td><input type="text" name="warganegara" value="<?php echo $warganegara;?>"></td>
            <td width="10%">Email</td>
            <td><input type="email" name="email" value="<?php echo $email;?>" size="21"></td>
            <td width="11%">No HP</td>
            <td><input type="tel" name="nohp" value="<?php echo $nohp;?>"></td>
        </tr>
        <tr>
            <td width="9%">Alamat</td>
            <td><textarea name="alamat" cols="21" rows="5"><?php echo $alamat;?></textarea></td>
            <td width="10%">Kode Pos</td>
            <td><input type="text" name="pos" value="<?php echo $pos;?>"></td>
            <td width="11%">Foto Profil</td>
            <td>
            <img src="files/<?php echo $filename;?>" width="150px" height="100px" alt=""><br>
            <input type="file" name="file">
            <input type="hidden" name="file_lama" value="<?php echo $filename;?>"></td>
        </tr>
        <input type="hidden" name="id" value="<?php echo $id;?>">
    </table>
    </center>
    <div class="btn">
        <a href="profile.php"><button type="button" class="back-btn">Kembali</button></a>
        <button type="submit" class="update-btn" name="update">Update</button>
    </div>
    </form>
</body>
</html>