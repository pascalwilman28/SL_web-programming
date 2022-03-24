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
        
        if($password === $confirmpassword){
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

        }else{
            $message = 'Your Password 1 and 2 is not equal';

            echo "<script>
                alert('$message');
                window.location.replace('register.php');
            </script>";
        }
    }

?>