<?php include 'layout/navbar.php';?>

<?php

$data = query("SELECT * FROM transaksi WHERE name ='{$_SESSION['name']}'");

?>


<div class="container">
    <div class="informasi">
        <h2>Hallo, Selamat Datang <?= $_SESSION['name']; ?> Ini Dashboard Belanja-mu!</h2> <br /> <br />

        <p>Status = Proses <br /> Mohon Bersabar, Produk Kamu sedang di Proses oleh Admin</p>

        <p>Status = Dikirim <br /> Mohon Ditunggu, Produk Kamu sedang di Kirim Lho!</p>

        <p>Status = Ditolak <br /> Mohon Periksa Kembali data data mu mohon isi dengan benar</p>
    </div>

    <div class="data-transaksi">
        <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nama Produk</th>
            <th>Alamat</th>
            <th>Harga Produk</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data as $data) : ?>
        <tr>
                <td><?= $i; ?></td>
                <td><?= $data["name"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td>Rp. <?= number_format($data["harga_produk"]); ?></td>
                <td><img src="foto/<?= $data["foto_produk"]; ?>" width="80px" alt=""></td>
                <td><?= $data["status"]; ?></td>
                <td>
                    <a href="detail_transaksi.php?id=<?= $data["id_transaksi"] ;?>" class="detail">Detail Transaksi</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
    </table>
    </div>
</div>