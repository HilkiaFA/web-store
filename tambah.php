<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_kopsis");


//mengambil nilai ID dari tombol hapus yang ditekan
$nama_produk = $_GET['nama_produk'];
$harga = $_GET['harga'];


$query=mysqli_query($conn, "INSERT INTO keranjang(nama_barang, harga)
VALUES ('$nama_produk', '$harga')"); 

if($query > 0){
    header('location:index1.php');
}else{
    echo 'Gagal disimpan';
}

?>