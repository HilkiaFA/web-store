<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_kopsis");

$query = "SELECT harga FROM keranjang";

// Eksekusi query
$result = mysqli_query($koneksi, $query);

// Inisialisasi variabel total harga menjadi 0
$total_harga = 0;

// Looping untuk menjumlahkan nilai-nilai harga
while ($row = mysqli_fetch_assoc($result)) {
	$total_harga += $row['harga'];
}

mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="bayar.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
	<header>
		<div>
			<h1 style="color: white;float: left; margin-left: 50px; margin-top: 30px;">HILKIA STORE</h1>
		</div>
		<div class="navbar">
			<ul>
			<li><a style="color: white;" href="index.html">Home</a></li>
				<li><a style="color: white;" href="index1.php">Nama Makanan</a></li>
				<li><a style="color: white;" href="info.html">Information</a></li>
			</ul>
		</div>
	</header>
	<section class="nav">
		<div></div>
	</section>

	<section class="bayar">
		<center>
			<div class="konten-bayar">
				<a class="judul-konten2">Harga</a>
					<a style="float: left;" class="judul-konten">Nama Barang</a>
					<?php
					include 'config.php';
					$produk = mysqli_query($conn, "SELECT * FROM keranjang");
					while ($hasil = mysqli_fetch_array($produk)) { ?>
						<div class="hasil-data"><br><br>
							<a style="float:left; margin-right: -100px;" class="jenis">
								<?php echo $hasil['nama_barang']; ?>
							</a>
							<a class="jenis">
								<?php echo $hasil['harga']; ?>
							</a>
						</div>
						
					<?php } ?>	
				</div>
				<div class="jenis2" style="float:left;">
				<form method="post" action="bayar.php">
					<a class="jenis-2" style="margin-right: 10px;">Total</a>
					<a style="font-size: 25px; margin-right: 10px;">:</a>
					<a style="font-size: 25px; margin-right:300px">
					<?php echo $total_harga;?>
					</a>
					<a style="font-size: 25px; margin-right: 300px">Masukkan uang : <input type="text" name="total" style="height: 30px; width:300px;" required></a>
					<button name="bayar" id="bayar"><a >Bayar</a></button>
				</form>
				</div>			
		</center>
	</section>
	<div>
			<p style="font-size:20px; margin-left:40px">Kembalian: <?php 
			if (isset($_POST['bayar'])) {
$total = $_POST['total'];

if ($total_harga > $total) {
  echo "Uang Anda kurang";
} else {
	if (isset($_POST['bayar'])) {
				$total = $_POST['total'];
			
				$jumlah =  $total - $total_harga;
				echo $jumlah;
				$sql = "DELETE FROM keranjang";
				$koneksi = mysqli_connect("localhost", "root", "", "db_kopsis");
if (mysqli_query($koneksi, $sql)) {
	echo "<script>alert('Pembayaran berhasil');</script>";
}
			  }
			}
		}
			?></p>
			<div><?php
			$conn = mysqli_connect("localhost", "root", "", "db_kopsis");

			// langkah 2: query data dari tabel
			$query = "SELECT * FROM keranjang";
			$result = mysqli_query($conn, $query);
			
			// langkah 3: periksa jumlah baris yang dihasilkan
			if (mysqli_num_rows($result) == 0) {
				
				echo '<button style="float:right; margin-right: 80px; margin-top: -40px"><a  href="index.html" style="text-decoration: none" >Kembali</a></button>';
				echo '<script>
				bayar.style.display = "none";
				</script>';
			}
			if (mysqli_num_rows($result) == 1) {
				// langkah 4: jika tidak ada data, tampilkan tombol
				
			}
			mysqli_close($conn);
			
			?></div>
		</div>
	<footer>
		<div><a class="txt-judul-footer">Kontak Kami</a></div>
		<div class="ass-footer"></div>
		<div class="footer"></div>
		<div class="ass-footbawah">
			<a class="ass-footbawah-txt">Copyrigth &copy; 2023 HILKIA FARREL AZARIA</a>
		</div>
	</footer>
</body>

</html>