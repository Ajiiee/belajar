<?php

session_start();

require 'function.php';

if(!isset($_SESSION["username"])){
    echo "
    <script>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php'   
    </script>
    ";
}

if($_SESSION["role"] != "Admin"){
    echo "
    <script>
        alert('Anda bukan admin')
        window.location = '../login/index.php'
    </script>
    ";
}

$transaksi = query("SELECT * FROM transaksi WHERE status = 'proses' ");

?>

<?php include '../layout/sidebar.php' ?>

<div class="main">
    <h3>Data Transaksi</h3>
    

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nama Produk</th>
            <th>Alamat</th>
            <th>Harga Produk</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($transaksi as $data) : ?>
        <tr>
                <td><?= $i; ?></td>
                <td><?= $data["name"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td>Rp. <?= number_format($data["harga_produk"]); ?></td>
                <td><img src="../foto/<?= $data["foto_produk"]; ?>" width="80px" alt=""></td>
                <td>
                    <a href="detail_transaksi.php?id=<?= $data["id_transaksi"] ;?>" class="edit">Detail Transaksi</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
    </table>

</div>