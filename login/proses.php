<?php
require '../koneksi.php';


$username = $_POST['username'];
$pass = $_POST['password'];

$query = mysqli_query($conn, "SELECT *FROM user WHERE username = '$username' AND password = '$pass' ");

$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_array($query);

    if($data["role"] == "Admin"){
        session_start();
        $_SESSION["username"] = $data["username"];
        $_SESSION["name"] = $data["name"];
        $_SESSION["role"] = $data["role"];
        header("Location: ../admin/index.php");

    }else if($data["role"] == "Customer"){
        session_start();
        $_SESSION["username"] = $data["username"];
        $_SESSION["name"] = $data["name"];
        $_SESSION["role"] = $data["role"];
        header("Location:../index.php");
    }
}else{
    echo "
    <script type='text/javascript'>
        alert('Username atau Password Salah')
        window.location = 'index.php'
    </script>
    ";
}


?>