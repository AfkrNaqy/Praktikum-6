<?php
    if(empty($_POST['nama']) || empty($_POST['email'])){
        header("Location:redirect_login.php");
    } else {
        echo "Nama : ".$_POST['nama']."<br>";
        echo "Email : ".$_POST['email']."<br>";
        date_default_timezone_set("Asia/Jakarta");
        echo "Login : " . date("l, d-m-Y H:i:sa");
    }
?>
