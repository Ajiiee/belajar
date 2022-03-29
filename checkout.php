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

$totalBelanja = 0; ?>

<?php foreach($_SESSION['cart'] as $produk => $result) : ?>

    <?php $data = query("SELECT * FROM produk WHERE id_produk = '$produk'")[0];
    $totalHarga = $result * $data["harga_produk"];
?>

<?php endforeach;?>

<div class="container">
    <div class="card-checkout" style="margin-top: 50px;">
    <h2><i>Checkout Produk</i></h2>
    <form action="" method="POST">
        <label>Nama Penerima : </label>
        <input type="text" name="name" class="form-control" value="<?= $_SESSION["name"]; ?>"> <br /> <br />

        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" id="alamat"><br /> <br />

        <label>No Handphone</label>
        <input type="text" name="no_hp" class="form-control" id="no_hp"><br /> <br />

        <label>Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" value="<?= $data["nama_produk"]; ?>"><br /> <br />

        <label>Harga Satuan</label>
        <input type="text" name="harga_produk" class="form-control" value="<?= number_format($data["harga_produk"]); ?>"> <br /> <br />

        <label>Sub Total Harga</label>
        <input type="text" name="subtotal" class="form-control" value="<?= number_format($totalHarga = $result * $data["harga_produk"]); ?>"><br /> <br />

        <input type="hidden" name="foto_produk" value="<?= $data['foto_produk'];?>"><br />

        <button type="submit" name="checkout" class="btn-checkout">Checkout</button>
</form>
    </div>
</div>

<?php
if(isset($_POST['checkout'])){
    if(checkoutProduk($_POST) > 0 ){
        echo "
        <script>
            alert('Pembelian Sukses!');
            window.location = 'index.php'
        </script>
        ";
    }else{
        echo mysqli_error($conn);
    }
}

?>