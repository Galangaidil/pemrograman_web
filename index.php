<?php
require 'koneksiDB.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- JQuery menggunakan CDN-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Tugas akhir pemrograman web</title>
</head>

<body>
  <div class="container">
    <h1 class="display-4">Data kota</h1>
    <a href="add.php" class="btn btn-primary text-decoration-none">Entry new kota</a>
    <a href="sample.php" class="btn btn-primary text-decoration-none">Lihat luas wilayah dalam bentuk chart</a>
    <br><br>
    <table class="table text-white rounded" style="background-color: rgb(37, 44, 72);">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NAMA KOTA</th>
          <th scope="col">NAMA PEMIMPIN</th>
          <th scope="col">TGL BERDIRI</th>
          <th scope="col">JUMLAH PENDUDUK</th>
          <th scope="col">LUAS WILAYAH</th>
          <th scope="col">JENIS KOTA</th>
          <th scope="col">KEUNGGULAN</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody id="content">
        <?php
        $dataKota = mysqli_query($conn, "SELECT * FROM kota");
        while ($data = mysqli_fetch_assoc($dataKota)) : ?>
          <tr>
            <td><a class="btn btn-success text-decoration-none" href="print.php?IDKota=<?= $data['IDKota'] ?>"><span class="material-icons">
                  print
                </span></a></td>
            <td><?= $data['NamaKota'] ?></td>
            <td><?= $data['NamaPemimpin'] ?></td>
            <td><?= $data['TglBerdiri'] ?></td>
            <td><?= $data['JmlPenduduk'] ?> Jiwa</td>
            <td><?= $data['LuasWilayah'] ?> km<sup>2</sup></td>
            <td><?= $data['JenisKota'] ?></td>
            <td><?= $data['Keunggulan'] ?></td>
            <td>
              <a class="btn btn-warning text-decoration-none" href="edit.php?IDKota=<?= $data['IDKota'] ?>"><span class="material-icons">
                  create
                </span></a> |
              <a class="btn btn-danger text-decoration-none" href="hapus.php?IDKota=<?= $data['IDKota'] ?>" onclick="return confirm('Yakin mau di hapus?')"><span class="material-icons">
                  delete
                </span></a>
            </td>
          </tr>
        <?php endwhile ?>
      </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>