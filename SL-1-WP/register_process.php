<?php
    session_start();

    if(isset($_POST['register'])){
        $firstname = $_POST['firstname'];
        $midname = $_POST['midname'];
        $lastname = $_POST['lastname'];
        $tempat = $_POST['tempat'];
        $ttl = $_POST['ttl'];
        $nik = $_POST['nik'];
        $warganegara = $_POST['warganegara'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $pos = $_POST['pos'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        if($firstname == NULL){
            echo "Nama Depan tidak boleh kosong";
        }else if($midname == NULL){
            echo "Nama Tengah tidak boleh kosong";
        }else if($lastname == NULL){
            echo "Nama Belakang tidak boleh kosong";
        }else if($tempat == NULL){
            echo "Tempat Lahir tidak boleh kosong";
        }else if($ttl == NULL){
            echo "Tanggal Lahir tidak boleh kosong";
        }else if($nik == NULL){
            echo "NIK tidak boleh kosong";
        }else if(strlen($nik) != 16){
            echo "Panjang NIK Minimal 16 digit";
        }else if($warganegara == NULL){
            echo "Warga Negara tidak boleh kosong";
        }else if($email == NULL){
            echo "Email tidak boleh kosong";
        }else if(strpos($email,"@") === false){
            echo "Email tidak valid";
        }else if($nohp == NULL){
            echo "No HP tidak boleh kosong";
        }else if(strlen($nohp) < 11 || strlen($nohp) > 13){
            echo "No HP tidak valid";
        }else if($alamat == NULL){
            echo "Alamat tidak boleh kosong";
        }else if($pos == NULL){
            echo "Kode Pos tidak boleh kosong";
        }else if(strlen($pos) != 5){
            echo "Kode Pos tidak valid";
        }else if($_FILES['file']['name'] == NULL){
            echo "Foto Profil tidak boleh kosong";
        }else if($username == NULL){
            echo "Username tidak boleh kosong";
        }else if($password == NULL){
            echo "Password 1 tidak boleh kosong";
        }else if($confirmpassword == NULL){
            echo "Password 2 tidak boleh kosong";
        }else if($password !== $confirmpassword){
            echo "Password 1 dan 2 tidak sama";
        }else{
            $_SESSION['firstname'] = $firstname;
            $_SESSION['midname'] = $midname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['tempat'] = $tempat;
            $_SESSION['ttl'] = $ttl;
            $_SESSION['nik'] = $nik;
            $_SESSION['warganegara'] = $warganegara;
            $_SESSION['email'] = $email;
            $_SESSION['nohp'] = $nohp;
            $_SESSION['alamat'] = $alamat;
            $_SESSION['pos'] = $pos;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            
            //file
            $file = $_FILES['file']['name'];
            $_SESSION['filename'] = $file;
            $tmp_file = $_FILES['file']['tmp_name'];
            $directory = "files/";

            $upload = move_uploaded_file($tmp_file, $directory.$file);

            if($upload){
                $message = 'Register Success';

                echo "<script>
                    alert('$message');
                    window.location.replace('welcome.php');
                </script>";
            }else{
                $message = 'Try again, Register Failed cause of process file upload have a problem';

                echo "<script>
                    alert('$message');
                    window.location.replace('register.php');
                </script>";
            }
        }

        ?>
        <button onclick="history.back()">Go Back</button>
        <?php 
    }

?>