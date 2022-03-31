<?php
    session_start();

    session_destroy();
    $message = 'Logout Success';

    echo "<script>
        alert('$message');
        window.location.replace('welcome.php');
    </script>";
    
?>