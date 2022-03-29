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
    if(tambahProduk($_POST) > 0){
        echo"
        <script type='text/javascript'>
            alert('Data Produk berhasil ditambahkan!');
            window.location = 'produk.php';
        </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data Produk Gagal ditambahkan!');
            window.location = 'produk.php';
        </script>
        ";
    }
}

?>


<?php include '../layout/sidebar.php' ?>

<div class="main">
    <div class="boks">
        <h2>Tambah Produk</h2>
        <form method="POST" enctype="multipart/form-data">
            <label>Nama Produk</label> <br />
            <input type="text" name="nama_produk" class="form-control"> <br /> <br />

            <label>Harga Produk</label><br />
            <input type="text" name="harga_produk" class="form-control"><br /> <br />

            <label>Foto Produk</label><br />
            <input type="file" name="foto_produk" class="form-control"><br /> <br />
            
            <label>Deskripsi Produk</label><br />
            <textarea name="deskripsi_produk" rows="10" class="form-control"></textarea> <br /><br />

            <label>Stok Produk</label><br />
            <input type="text" name="stok_produk" class="form-control"><br /> <br />


            <button type="submit" name="submit">Tambah Produk</button>
        </form>
    </div>
</div>