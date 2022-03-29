<?php

session_start();
require '../koneksi.php';

if(!isset($_SESSION["username"]) ){
    echo "
    <script type='text/javascript'>
        alert('Silahkan Login terlebih dahulu')
        window.location = '../login/index.php'
    </script>
    ";
}

if($_SESSION["role"] != "Admin"){
    echo "
    <script type='text/javascript'>
        alert('Anda Bukan Admin')
        window.location = '../login/index.php'
    </script>
    ";
}

?>

<?php include '../layout/sidebar.php' ?>

<div class="main">
    <h2>Selamat Datang di JAFF Store, Jual beli Printer Berkualitas</h2>
</div>