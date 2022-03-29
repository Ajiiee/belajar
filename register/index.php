<?php

require 'proses.php';
if(isset($_POST["register"])){
    if(tambahUser($_POST) > 0){
        echo"
                <script type='text/javascript'>
                alert('Register Berhasil, Silahkan Login!!')
                window.location='../login/index.php'
                </script>
            ";
    }else{
        echo"
                <script type='text/javascript'>
                alert('Mohon Maaf Pendaftaran gagal!!')
                window.location='index.php'
                </script>
            ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <div class="container">
        <h2><i>J4FF Store</i></h2>
        <h3>Halaman Register</h3>

        <form action="" method="POST">

            <label>Username</label>
            <input type="text" name="username" id="" class="form-control"> <br /><br />
            
            <label>Nama Lengkap</label>
            <input type="text" name="name" id="" class="form-control"> <br /> <br />

            <label>Password</label>
            <input type="password" name="password" id="" class="form-control"> <br /><br />

            <label>Role</label>
            <select name="role" id="" class="form-control">
                <option value="Customer">Customer</option>
            </select> <br /> <br />

            <button type="submit" name="register" >Register</button>
            <div class="login">
                <small>Sudah Mempunyai akun ? <br/>
            <a href="../login/index.php">Login</a></small>
            </div>
        </form>
    </div>

</body>
</html>