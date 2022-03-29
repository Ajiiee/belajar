<?php

session_start();


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

require 'function.php';
if(isset($_POST["submit"])){
    if(editProduk($_POST) > 0){
        echo"
        <script type='text/javascript'>
            alert('Data Produk berhasil diubah!');
            window.location = 'produk.php';
        </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data Produk Gagal diubah!');
            window.location = '#';
        </script>
        ";
    }
}

$id = $_GET["id"];
$data = query("SELECT * FROM produk WHERE id_produk = $id")[0];

?>


<?php include '../layout/sidebar.php' ?>

<div class="main">
    <div class="boks">
        <h2>EDIT Produk</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" class="form-control" value="<?= $data['id_produk']; ?>">
            <label>Nama Produk</label> <br />
            <input type="text" name="nama_produk" class="form-control" value="<?= $data ['nama_produk']; ?>"> <br /> <br />

            <label>Harga Produk</label><br />
            <input type="text" name="harga_produk" class="form-control" value="<?= $data ['harga_produk']; ?>"><br /> <br />

            <label>Foto Produk</label><br />
            <input type="file" name="foto_produk" class="form-control" value="<?= $data ['foto_produk']; ?>"><br /> <br />
            
            <label>Deskripsi Produk</label><br />
            <textarea name="deskripsi_produk" rows="10" class="form-control"><?= $data ['deskripsi_produk']; ?></textarea> <br /><br />

            <label>Stok Produk</label><br />
            <input type="text" name="stok_produk" class="form-control" value="<?= $data ['stok_produk']; ?>"><br /> <br />


            <button type="submit" name="submit">Edit Produk</button>
        </form>
    </div>
</div>