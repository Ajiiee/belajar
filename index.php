<?php include 'layout/navbar.php';?>

<?php

$data = query("SELECT * FROM produk");

?>


<div class="container">
    <div class="text-produk">
        <h2><u>Produk Terlaris</u></h2>
    </div>

    <?php
    $products = mysqli_query($conn, "SELECT * FROM produk ORDER BY id_produk DESC LIMIT 1 ");
    foreach ($products as $product) :
    ?>
    <div class="wrapper-produk">
    <div class="produk">
        <a href="detail.php?id=<?= $product["id_produk"]; ?>">
            <img src="foto/<?= $product["foto_produk"] ; ?>" alt="">
                <h2><?= $product["nama_produk"]; ?></h2>
                    <p>Rp. <?= number_format($product["harga_produk"]); ?></p>
                    <button class="beli-1">Lihat Detail</button>
        </a>
    </div>
    <?php endforeach ?>
</div>
    <div class="text-produk">
        <h2>Produk Terbaru</h2>
    </div>
        
        <div class="wrapper-produk">
            <?php foreach($data as $produk): ?>
                <div class="produk">
                    <a href="detail.php?id=<?= $produk["id_produk"]; ?>">
                        <img src="foto/<?= $produk["foto_produk"] ; ?>" alt="">
                        <h2><?= $produk["nama_produk"]; ?></h2>
                        <p>Rp. <?= number_format($produk["harga_produk"]); ?></p>
                        <button class="beli-1">Lihat Detail</button>
                    </a>
                </div>
                <?php endforeach ?>
    </div>
</div>