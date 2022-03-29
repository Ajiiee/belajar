<?php

require '../koneksi.php';

function tambahUser($data){
    global $conn;

    $username = $_POST['username'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $role = $_POST['role'];

    $query = mysqli_query($conn, "INSERT into user VALUES(NULL, '$username', '$name', '$pass', '$role')");

    return mysqli_affected_rows($conn);

}

?>