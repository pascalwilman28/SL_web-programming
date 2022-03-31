<?php
    session_start();

    include "config.php";

    if(isset($_POST['update'])){
        $id = $_POST['id'];
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
        }else{
            
            //file
            
            $file = $_POST['file_lama'];

            if($_FILES['file']['name'] != NULL){
               $file = $_FILES['file']['name'];
                if(strlen($file) > 100){
                    $message = 'File Name too long, max 100 characters';
                    
                    echo "<script>
                    alert('$message');
                    window.location.replace('profile.php');
                    </script>";
                }else{
                    $tmp_file = $_FILES['file']['tmp_name'];
                    $directory = "files/";
                    
                    $upload = move_uploaded_file($tmp_file, $directory.$file);
                    if(!$upload){
                        $message = 'Try again, Update Failed cause of process file upload have a problem';
        
                        echo "<script>
                            alert('$message');
                            window.location.replace('profile.php');
                        </script>";
                    }else{
                        if (file_exists($directory.$_POST['file_lama'])) 
                        {
                            unlink($directory.$_POST['file_lama']);
                            // echo "File Successfully Delete."; 
                        }else{
                            // echo "File does not exists"; 
                        }
                    }
                }
            }
            $sql = "UPDATE user SET firstname = '$firstname', midname = '$midname', lastname = '$lastname', tempat = '$tempat', ttl = '$ttl', nik = '$nik', warganegara = '$warganegara', email = '$email', nohp = '$nohp', alamat = '$alamat', pos = '$pos', file = '$file' WHERE id_user = '$id'";

            if($sql){
                mysqli_query($connection,$sql);
                $message = 'Update Success';
                
                echo "<script>
                    alert('$message');
                    window.location.replace('profile.php');
                </script>";
            }else{
                $message = 'Try again, Update Failed cause save data have a problem';

                echo "<script>
                    alert('$message');
                    window.location.replace('profile.php');
                </script>";
            }
        }

        ?>
        <button onclick="history.back()">Go Back</button>
        <?php 
    }

?>