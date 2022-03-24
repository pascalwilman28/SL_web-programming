<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <h2 class="title">Login</h2>
    <div class="box">
        <form action="login_process.php" method="post">
            <center>
            <table cellpadding="5">
                <tr>
                    <td width="35%">Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
            </table>
            </center>
            <div class="btn">
                <button type="submit" class="login-btn" name="login">Login</button>
                <a href="welcome.php"><button type="button" class="back-btn">Kembali</button></a>
            </div>
        </form>
    </div>
</body>
</html>