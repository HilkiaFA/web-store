<?php
//koneksi ke database
$conn = mysqli_connect('localhost','rajuhanip','rajuhanip','db_kopsis');

//mengambil nilai ID dari tombol hapus yang ditekan
$id = $_GET['id'];

//menghapus data dari database
$query = "DELETE FROM keranjang WHERE ID = $id";
mysqli_query($conn, $query);

//menutup koneksi database
mysqli_close($conn);
?>
<script language="JavaScript"> 
document.location='index1.php'</script> 