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
            <td><input type="text" name="firstname" required></td>
            <td width="10%">Nama Tengah</td>
            <td><input type="text" name="midname" required></td>
            <td width="11%">Nama Belakang</td>
            <td width="10%"><input type="text" name="lastname" required></td>
        </tr>
        <tr>
            <td width="9%">Tempat Lahir</td>
            <td><input type="text" name="tempat" required></td>
            <td width="10%">Tgl Lahir</td>
            <td><input type="date" name="ttl" required></td>
            <td width="11%">NIK</td>
            <td><input type="text" name="nik" minlength="16" maxlength="16" required></td>
        </tr>
        <tr>
            <td width="9%">Warga Negara</td>
            <td><input type="text" name="warganegara" required></td>
            <td width="10%">Email</td>
            <td><input type="email" name="email" required></td>
            <td width="11%">No HP</td>
            <td><input type="tel" name="nohp" minlength="11" maxlength="13" required></td>
        </tr>
        <tr>
            <td width="9%">Alamat</td>
            <td><textarea name="alamat" cols="21" rows="5" required></textarea></td>
            <td width="10%">Kode Pos</td>
            <td><input type="text" name="pos" minlength="5" maxlength="5" required></td>
            <td width="11%">Foto Profil</td>
            <td><input type="file" name="file" required></td>
        </tr>
        <tr>
            <td width="9%">Username</td>
            <td><input type="text" name="username" required></td>
            <td width="10%">Password 1</td>
            <td><input type="password" name="password" required></td>
            <td width="11%">Password 2</td>
            <td><input type="password" name="confirmpassword" required></td>
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