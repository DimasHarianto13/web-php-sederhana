<?php

session_start();
if(!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

    if(isset($_POST["submit"])) {

        if(tambah ($_POST) > 0) {
            echo "
                <script> 
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";            
        } else {
            echo "
                <script> 
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';
                </script> 
            ";
    }
}
      
?>

<!doctype html>
<html>
    <head>
        <title>Tambah Data Mahasiswa</title>
    </head>
    <body>
        <h1>tambah data mahasiswa</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama"
                    required>
                </li>
            </ul>
            <ul>
                <li>
                    <label for="npm">Npm</label>
                    <input type="text" name="npm" id="npm"
                    required>
                </li>
            </ul>
            <ul>
                <li>
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan"
                    required>
                </li> 
            </ul>
            <ul>
                <li>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email"
                    required>
                </li>
                
            </ul>
            <ul>
                <li>
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" id="gambar">
                </li>
            </ul>
            <ul>
                <li>
                   <button type="submit" name="submit">Tambah data

                   </button>
                </li>
            </ul>

        </form>
    </body>
</html>