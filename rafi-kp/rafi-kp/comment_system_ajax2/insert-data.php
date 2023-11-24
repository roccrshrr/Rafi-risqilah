<?php
    include 'config.php';

    $name = $_POST['name'];
    $msg = $_POST['msg'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO msg2 (name, msg, email) VALUES ('$name', '$msg', '$email')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo 1;
    }else {
        echo 0;
    }
?>