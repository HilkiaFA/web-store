<?php
// membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_kopsis");

// melakukan pengecekan koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal: " . mysqli_connect_error();
}

// menghapus semua item dari tabel
$sql = "DELETE FROM keranjang";
if (mysqli_query($koneksi, $sql)) {
  echo "Data berhasil dihapus";
} else {
  echo "Gagal menghapus data: " . mysqli_error($koneksi);
}

// menutup koneksi database
mysqli_close($koneksi);
?>