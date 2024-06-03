<?php 
 require '../functions.php';
 $keyword = $_GET['keyword'];
 $query = "SELECT * FROM mahasiswa 
            WHERE
            nama LIKE '%$keyword%' OR
            npm LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' OR
            email LIKE '%$keyword%'";
 $mahasiswa = query($query);
?>

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