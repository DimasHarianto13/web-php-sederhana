<?php

session_start();
if(!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];




    if(isset($_POST["submit"])) {

        if(ubah ($_POST) > 0) {
            echo "
                <script> 
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            ";            
        } else {
            echo "
                <script> 
                    alert('data gagal diubah!');
                    document.location.href = 'index.php';
                </script> 
            ";
    }
}
      
?>

<!doctype html>
<html>
    <head>
        <title>Ubah Data Mahasiswa</title>
    </head>
    <body>
        <h1>Ubah data mahasiswa</h1>

        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs['id'];?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs['gambar'];?>">
            <ul>
                <li>
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" required
                     value="<?= $mhs["nama"];?>">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="npm">Npm</label>
                    <input type="text" name="npm" id="npm" required
                    value="<?= $mhs["npm"];?>">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan"
                    value="<?= $mhs["jurusan"];?>">
                </li> 
            </ul>
            <ul>
                <li>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email"
                    value="<?= $mhs["email"];?>">
                </li>
                
            </ul>
            <ul>
                <li>
                    <label for="gambar">Gambar</label><br>
                    <img src="img/<?= $mhs["gambar"];?>" width="40" ><br>
                    <input type="file" name="gambar" id="gambar">
                    
                </li>
            </ul>
            <ul>
                <li>
                   <button type="submit" name="submit">Ubah data

                   </button>
                </li>
            </ul>

        </form>
    </body>
</html>