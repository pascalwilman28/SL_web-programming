<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <h2 class="title">Register</h2>
    <center>
    <form action="register_process.php" method="post" enctype="multipart/form-data">
    <table width="90%" cellpadding="3">
        <tr>
            <td width="10%">Nama Depan</td>
            <td><input type="text" name="firstname"></td>
            <td width="10%">Nama Tengah</td>
            <td><input type="text" name="midname"></td>
            <td width="11%">Nama Belakang</td>
            <td width="10%"><input type="text" name="lastname"></td>
        </tr>
        <tr>
            <td width="9%">Tempat Lahir</td>
            <td><input type="text" name="tempat"></td>
            <td width="10%">Tgl Lahir</td>
            <td><input type="date" name="ttl"></td>
            <td width="11%">NIK</td>
            <td><input type="text" name="nik"></td>
        </tr>
        <tr>
            <td width="9%">Warga Negara</td>
            <td><input type="text" name="warganegara"></td>
            <td width="10%">Email</td>
            <td><input type="email" name="email"></td>
            <td width="11%">No HP</td>
            <td><input type="tel" name="nohp"></td>
        </tr>
        <tr>
            <td width="9%">Alamat</td>
            <td><textarea name="alamat" cols="21" rows="5"></textarea></td>
            <td width="10%">Kode Pos</td>
            <td><input type="text" name="pos"></td>
            <td width="11%">Foto Profil</td>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
            <td width="9%">Username</td>
            <td><input type="text" name="username"></td>
            <td width="10%">Password 1</td>
            <td><input type="password" name="password"></td>
            <td width="11%">Password 2</td>
            <td><input type="password" name="confirmpassword"></td>
        </tr>
    </table>
    </center>
    <div class="btn">
        <a href="welcome.php"><button type="button" class="back-btn">Kembali</button></a>
        <button type="submit" class="register-btn" name="register">Register</button>
    </div>
    </form>
</body>
</html>