<?php
require 'functions.php';
$siswa = query("SELECT * FROM buku");


if( isset($_POST["cari"]) ) {
    $siswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html 
<head>
    <title>Halaman Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <Header>
        <div class="header-item">Home</div>
    </Header>

    <footer>
        <h1>Daftar Siswa</h1>
        <form action="" method="post">

        <label for="name">Pencarian : </label>
        <input class="input-name" type="text" id="name" name="keyword" size="30" autofocus 
        placeholder="Ketikan Nis/Nama.." autocomplete="off">
        <button class="btn-search" type="submit" name="cari">Cari</button>

        </form>
        <br>
        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>No.</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Ttl</ths>
            </tr>

            <?php $i = 1; ?>
            <?php foreach( $siswa as $row ) : ?>
            <tr>
                 <td><?= $i; ?></td>
                <td><?= $row["nis"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["ttl"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </footer>
    </body>
</html>