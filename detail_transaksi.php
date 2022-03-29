<?php include 'layout/navbar.php';?>
<?php

$id = $_GET['id'];
$transaksi = query("SELECT * FROM transaksi WHERE id_transaksi = '$id'")[0];

?>


<div class="container">
    <div class="detail-transaksi">
        <div class="foto">
            <img src="foto/<?= $transaksi['foto_produk']; ?>" width="250px" alt="">
        </div>

        <div class="transaksi">
            <h3>Nama Pembeli : <?= $transaksi["name"]; ?></h3>
            <h3>Alamat : <?= $transaksi["alamat"]; ?></h3>
            <h3>No. Hp : <?= $transaksi["no_hp"]; ?></h3>
            <h3>Nama Produk : <?= $transaksi["nama_produk"]; ?></h3>
            <h3>Harga Produk : <?= number_format($transaksi["harga_produk"]); ?></h3>
            <h3>Sub Total Harga : <?= number_format($transaksi["subtotal"]); ?></h3>
            <h3>Status : <?= $transaksi["status"]; ?> </h3>

        <?php
        if($transaksi['status'] == "proses"){
            ?>
            <button class="proses">Pesanan Kamu Sedang Di Proses</button>
            <?php
        }else if($transaksi["status"] == "dikirim"){
            ?>
            <button class="dikirim">Pesanan Kamu Sedang DIkirim</button>
            <?php
        }else if($transaksi["status"] == "ditolak"){
            ?>
            <button class="ditolak">Pesananmu Ditolak </button>
            <?php
        }
        
        ?>
        </div>

        </div>
    

</div>
</div>