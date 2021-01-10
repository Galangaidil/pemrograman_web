<?php
//koneksi database
require 'koneksiDB.php';

// Mendapatkan ID kota
$IDKota = $_GET['IDKota'];

if (hapus($IDKota) > 0) {
    echo
        "
    <script> alert('data berhasil di hapus');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "
    <script> alert('data Gagal di hapus');
    document.location.href = 'index.php';
    </script>
    ";
}

//hapus data
function hapus($IDKota)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM kota where IDKota = $IDKota");
    return mysqli_affected_rows($conn);
}
