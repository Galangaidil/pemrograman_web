<?php
//koneksi database
require 'koneksiDB.php';

// Mendapatkan ID kota
$IDKota = $_GET['IDKota'];

$query = mysqli_query($conn, "SELECT * FROM kota WHERE IDKota = '$IDKota'");

// Menyimpan data ke variabel
while ($data = mysqli_fetch_assoc($query)) {
   $NamaKota = $data['NamaKota'];
   $NamaPemimpin = $data['NamaPemimpin'];
   $TglBerdiri = $data['TglBerdiri'];
   $JmlPenduduk = $data['JmlPenduduk'];
   $LuasWilayah = $data['LuasWilayah'];
   $JenisKota = $data['JenisKota'];
   $Keunggulan = $data['Keunggulan'];
}

?>
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

   <title>Cetak kota : <?= $NamaKota ?></title>
</head>

<body>
   <div class="container">
      <h1 class="display-4">Kota : <?= $NamaKota ?></h1>
      <a href="index.php" class="btn btn-primary text-decoration-none">Back to home</a>
      <br><br>
      <form action="" method="post">
         <div class="row g-3">

            <!-- ID Kota -->
            <input type="hidden" name="IDKota" id="IDKota" value="<?= $IDKota ?>">

            <!-- Nama kota -->
            <div class="col-md-6">
               <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="NamaKota" id="NamaKota" placeholder="<?= $NamaKota ?>" value="<?= $NamaKota ?>">
                  <label for="NamaKota">Nama Kota</label>
               </div>
            </div>

            <!-- Nama Pemimpin -->
            <div class="col-md-6">
               <div class="form-floating">
                  <input type="text" class="form-control" name="NamaPemimpin" id="NamaPemimpin" placeholder="<?= $NamaPemimpin ?>" value="<?= $NamaPemimpin ?>">
                  <label for="NamaPemimpin">Nama Pemimpin</label>
               </div>
            </div>

            <!-- tanggal berdiri -->
            <div class="col-md-4">
               <div class="form-floating">
                  <input type="date" class="form-control" name="TglBerdiri" id="TglBerdiri" placeholder="<?= $TglBerdiri ?>" value="<?= $TglBerdiri ?>">
                  <label for="TglBerdiri">Tanggal berdiri</label>
               </div>
            </div>

            <!-- Jumlah penduduk -->
            <div class="col-md-8">
               <div class="form-floating">
                  <input type="number" class="form-control" name="JmlPenduduk" id="JmlPenduduk" placeholder="<?= $JmlPenduduk ?>" value="<?= $JmlPenduduk ?>">
                  <label for="JmlPenduduk">Jumlah penduduk</label>
               </div>
            </div>

            <!-- Jenis kota -->
            <div class="col-md-4">
               <div class="form-floating">
                  <select class="form-select" name="JenisKota" id="JenisKota" aria-label="Floating label select example">
                     <option value="Istimewa" selected>Istimewa</option>
                     <option value="Otonom">Otonom</option>
                     <option value="Ibukota">Ibukota</option>
                  </select>
                  <label for="JenisKota">Jenis kota</label>
               </div>
            </div>

            <!-- Luas wilayah -->
            <div class="col-md-8">
               <div class="form-floating">
                  <input type="number" class="form-control" name="LuasWilayah" id="LuasWilayah" placeholder="<?= $LuasWilayah ?>" value="<?= $LuasWilayah ?>">
                  <label for="LuasWilayah">Luas wilayah</label>
               </div>
            </div>

            <!-- Keunggulan -->
            <div class="col-md-12">
               <div class="form-floating">
                  <input type="text" class="form-control" name="Keunggulan" id="Keunggulan" placeholder="<?= $Keunggulan ?>" value="<?= $Keunggulan ?>">
                  <label for="Keunggulan">Keunggulan</label>
               </div>
            </div>

            <!-- Button Cetak -->
            <div class="d-grid gap-2">
               <button name="submit" onclick="window.print()" class="btn btn-primary">Cetak</button>
            </div>

         </div>
      </form>

   </div>
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