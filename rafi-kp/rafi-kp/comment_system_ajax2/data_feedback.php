<?php

include("config.php");
if(isset($_POST[ 'submit' ])){
    $Name = $_POST['nama'];
    $Message = $_POST['msg'];
    $email = $_POST['email'];
    $tanggal = date('d/m/Y');

    $sql = "INSERT INTO msg2 (name, msg, email, tanggal) VALUE ('$Name','$Message','$email','$tanggal')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header( 'Location: index3.html?status=gagal' );
    }
} else {
    die( "Akses dilarang..." );
}

?>