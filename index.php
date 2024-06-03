<?php
    session_start();
    if(!isset($_SESSION["login"])) {
        header("location: login.php");
        exit;
    }

    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");

    if(isset($_POST["cari"])) {
        $mahasiswa = cari ($_POST["keyword"]);

    }

       
?>
<!doctype html>
<html>
    <head>
        <title>Halaman Admin</title>
    </head>

    <style>
        @media print {
            .logout, .tambah, .form-cari{
                display: none;
            }
            
        }
    </style>

    <body>
        
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php" class="tambah">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post" class="form-cari">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." 
    autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">cari</button>

    </form>

    <br><br>
    <div id="mahasiswa">
    <table border="1" cellpadding="10" cellspacing="0" >

        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Npm</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1;?>
        <?php foreach($mahasiswa as $row) : ?>

        <tr>
            <td><?= $i;?></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["npm"];?></td>
            <td><?= $row["jurusan"];?></td>
            <td><?= $row["email"];?></td>
            <td><img src="img/<?= $row["gambar"];?>" width="50"></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>">edit</a> |
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin?');">hapus</a>
            </td>
        </tr>

        <?php $i++;?>
        <?php endforeach; ?>

        </table>
        </div>
        <a href="logout.php" class="logout">Logout</a>


        <Script src="js/script.js"></Script>


    </body>
</html>