<?php
    session_start();
    $filename = $_SESSION['filename'];

    if (unlink("files/".$filename)) {
        session_destroy();
        $message = 'Logout Success';

        echo "<script>
            alert('$message');
            window.location.replace('welcome.php');
        </script>";
    } else {
        $message = 'Logout Success and Profil Image not success for delete in file';

        echo "<script>
            alert('$message');
            window.location.replace('welcome.php');
        </script>";
    }
    
?>