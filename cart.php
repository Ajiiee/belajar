<?php include 'layout/navbar.php';?>

<?php

if(empty($_SESSION["cart"] || isset($_SESSION["cart"]))){
    echo '
        <script>
            alert("Keranjang Kosong, Silahkan Berbelanja terlebih dahulu")
        </script>
        ';

        echo '
        <script>
            location = "index.php";
        </script>
        ';
}

?>


<div class="container">
    <?php foreach($_SESSION["cart"] as $id_produk => $hasil) : ?>
    <?php
        $data = query("SELECT * FROM produk WHERE id_produk = $id_produk")[0];
        $subtotalHarga = $hasil * $data["harga_produk"];    
            
    ?>
        
        <div class="card-cart">
            <div class="item">
            <img src="foto/<?= $data["foto_produk"]; ?>" width="20%" alt="">    
            </div>        
                <div class="child-cart">
                    <h4 class="nama-produk">Nama Produk : <?= $data["nama_produk"]; ?></h4>

                    <h4 class="harga">Harga Produk : <?= number_format($data["harga_produk"]); ?></h4>

                    <h4 style="margin-top : 10px;">Total Harga : Rp <?= number_format($subtotalHarga);?></h4>

                    <h4 style="margin-top : 10px; margin-bottom : 20px;">Nama Pengguna : <?php echo $_SESSION["name"];?></h4>

                    <a href="hapus-cart.php?id=<?= $data["id_produk"]; ?>" class="cart-delete">Hapus</a>

                    <a href="checkout.php" class="checkout">Checkout Produk</a>
                    
                </div>
        
        </div>
        <?php endforeach; ?>
</div>


