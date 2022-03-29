<?php


session_start();
$id = $_GET['id'];
unset($_SESSION["cart"][$id]);
echo "
        <script type='text/javascript'>
            alert('Produk telah Terhapus')
            window.location = 'index.php';
        </script>
        ";
if(isset($_SESSION["cart"]) < 0){
    echo "
        <script>
            alert('Keranja Belanja anda Kosong!, Silahkan berbelanja terlebih dahulu')
            window.location = 'index.php'
        </script>
        ";
}

?>