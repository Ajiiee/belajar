<?php

require '../koneksi.php';

function query($query){
    
    global $conn;

    $rows = [];

    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}

function tambahProduk($data){
    global $conn;

    $nama = $data["nama_produk"];
    $harga = $data["harga_produk"];
    $foto = $_FILES["foto_produk"]["name"];
    $files = $_FILES["foto_produk"]["tmp_name"];
    $desk = $data["deskripsi_produk"];
    $stok = $data["stok_produk"];

    $query = "INSERT into produk VALUES(NULL, '$nama', '$harga', '$foto', '$desk', '$stok')";

    move_uploaded_file($files, "../foto/".$foto);

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);


}

function hapusProduk($id){

    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id");

    return mysqli_affected_rows($conn);


}

function editProduk($data){

    global $conn;

    $id = $data["id_produk"];
    $nama = $data["nama_produk"];
    $harga = $data["harga_produk"];
    $foto = $_FILES["foto_produk"]["name"];
    $files = $_FILES["foto_produk"]["tmp_name"];
    $deskripsi= $data["deskripsi_produk"];
    $stok = $data["stok_produk"];

    if(empty($foto)){
        $query = "UPDATE produk SET
        nama_produk = '$nama',
        harga_produk = '$harga',
        deskripsi_produk = '$deskripsi',
        stok_produk = '$stok' WHERE id_produk = '$id'
        ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);

    }else{
        $query = "UPDATE produk SET
        nama_produk = '$nama',
        harga_produk = '$harga',
        foto_produk = '$foto',
        deskripsi_produk = '$deskripsi',
        stok_produk = '$stok' WHERE id_produk = '$id'
        ";

        move_uploaded_file($files, "../foto/".$foto);

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}



?>