<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
	<link rel="stylesheet" type="text/css" href="minum.css">
</head>

<body>
<header>
		<h1 style="color:white; float: left; margin-left: 50px; margin-top: 30px;">Makanan</h1>
		<div>
			<button onclick="openNav()"
				style="background-color: transparent; border:0px; float:right; margin-top:34px; margin-right:25px; margin-left:10px;"><img
					src="./img/keranjang.png" style="width:30px;" onmousedown="return false;"
					onselectstart="return false;"></button>
		</div>
		<div class="navbar">
			<ul>
				<li><a style="color:white" href="index.html">Home</a></li>
				<li><a style="color:white" href="index1.php">Semua Barang</a></li>
				<li><a style="color:white" href="makanan.php">Makanan</a></li>
				<form method="POST" action="index1.php" style="float:right; margin-top:-2px;">
					<li><input type="text" name="cari" id="cari"
							style="border-radius:10px;border:0px ; margin-right:-30px; height:25px;"
							placeholder="Cari buku...." required="isi"></li>
					<button onclick="tampilkan()" name="submit" id="submit"
						style="border: 0px; height:30px; background-color: #0f6fc7; margin-right:20px;"><a
							style=" color: white;">KLIK HERE</a></button>
				</form>
			</ul>
		</div>
	</header>
    <section class="nav">
		<div></div>
	</section>

    <div id="mySidenav" class="sidenav">
		<h2 style="margin-top:-45px; margin-bottom:50px; margin-left:40px;"><img src="./img/keranjang-buka.png"
				style="width:27px;"> Keranjang Mas</h2>
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<?php
		include 'config.php';
		$produk = mysqli_query($conn, "SELECT * FROM keranjang");
		while ($hasil = mysqli_fetch_array($produk)) { ?>
			<div class="keranjang">
				<a style="float:left; margin-left:-30px" class="jenis">Nama barang:
					<?php echo $hasil['nama_barang']; ?>
				</a>
				<a style="float:left; margin-left:-30px" class="jenis">Harga barang:
					<?php echo $hasil['harga']; ?>
				</a>
				<button style="width:120px; border:0px;background-color:cornsilk"
					href="hapus.php?id=<?php echo $hasil['ID']; ?>"><a href="hapus.php?id=<?php echo $hasil['ID']; ?>"
						style="font-size:15px; text-decoration: none; width:20px; float:left;">Hapus</a></button>
			</div>
		<?php } ?>
		<form method="post"
					action="bayar.php">
					<div class="bg-btn-bayar">
					<button class="btn-bayar1" href="bayar.php"><a class="btn-bayar" href="bayar.php">Bayar</a></button>
					</div>
	</form>
	</div>

    <div id="produk-container-1">
	<?php
	if (isset($_POST['submit'])) {
		// mencari nama barang pada tabel barang
		$nama_barang = $_POST['cari'];
		$sql = "SELECT * FROM minum WHERE nama_barang LIKE '%$nama_barang%'";
		$result = $conn->query($sql);

		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$harga = $row['harga'];
				?>
				<div data-aos="fade-down" class="box-produk" style="border: 5px solid #C0C0C0;">
					<form method="post"
						action="tambah.php?nama_produk=<?php echo $row['nama_barang']; ?>&harga=<?php echo $harga; ?>">
						<p style="font-size:17px; color:black; margin-left:50px;" class="jenis">Nama barang:</p>
						<p style="font-size:17px; color:black; margin-left:50px; margin-top:-15px;" class="jenis">
							<?php echo $row['nama_barang']; ?>
						</p>
						<p style="font-size:17px; color:black; margin-left:50px;" class="jenis">Harga:</p>
						<h2 style="font-size:17px;  color:#084382; margin-top:-15px; margin-left:50px;">
							<?php echo $row['harga']; ?>
						</h2>
						<p style="font-size:17px; color:black; margin-left:50px;" class="jenis">kode barang:</p>
						<p style="font-size:17px; color:black; margin-top:-15px; margin-left:50px;" class="jenis">
							<?php echo $row['kode']; ?>
						</p>
						<p style="font-size:17px; color:black; margin-left:50px;" class="jenis">EXP:</p>
						<p style="font-size:17px; color:black; margin-left:50px; margin-top:-15px; " class="jenis">
							<?php echo $row['exp']; ?>
						</p>
						<button class="btn-pinjam"><a name="tambah" style="color: white; text-decoration: none;">Tambah ke
								keranjang</a></button>
					</form>
				
				</div>
			<?php } ?>
		<?php } ?>
	<?php } ?>
</div>

<div id="produk-container">
		<?php
		include 'config.php';
		$produk = mysqli_query($conn, "SELECT * FROM minum");
		while ($hasil = mysqli_fetch_array($produk)) {
			$harga = $hasil['harga'];
			?>
			<div id="my-div" data-aos="fade-down" class="box-produk" style="border: 5px solid #C0C0C0;">
				<form method="post"
					action="tambah2.php?nama_produk=<?php echo $hasil['nama_barang']; ?>&harga=<?php echo $harga; ?>">
					<p style="font-size:17px; color:black; margin-left:50px;">Nama barang:</p>
					<p style="font-size:17px; color:black; margin-left:50px; margin-top:-15px;">
						<?php echo $hasil['nama_barang']; ?>
					</p>
					<p style="font-size:17px; color:black; margin-left:50px;">Harga:</p>
					<h2 style="font-size:17px;  color:#084382; margin-top:-15px; margin-left:50px;">
						<?php echo $hasil['harga']; ?>
					</h2>
					<p style="font-size:17px; color:black; margin-left:50px;">kode barang:</p>
					<p style="font-size:17px; color:black; margin-top:-15px; margin-left:50px;">
						<?php echo $hasil['kode']; ?>
					</p>
					<p style="font-size:17px; color:black; margin-left:50px;">EXP:</p>
					<p style="font-size:17px; color:black; margin-left:50px; margin-top:-15px; ">
						<?php echo $hasil['exp']; ?>
					</p>
					<button class="btn-pinjam"><a style="color: white; text-decoration: none;" name="tambah">Tambah ke
							keranjang</a></button>
				</form>
			</div>
		<?php } ?>
	</div>

	<footer>
		<div><a class="txt-judul-footer">Kontak Kami</a></div>
		<div class="ass-footer"></div>
		<div class="footer"></div>
		<div class="ass-footbawah">
			<a class="ass-footbawah-txt">Copyrigth 	&copy; 2023 HILKIA FARREL AZARIA</a>
		</div>
	</footer>

    <script>
		const produkContainer = document.getElementById("produk-container");
		const produkContainer1 = document.getElementById("produk-container-1");
		const searchButton = document.getElementsByName("submit")[0];

		searchButton.addEventListener("click", () => {
			produkContainer.style.display = "none";
			produkContainer1.style.display = "block";
			produkContainer1.style.zIndex = "100";
			produkContainer.style.zIndex = "1";
		});

		function openNav() {
			document.getElementById("mySidenav").style.width = "300px";
			document.getElementById("mySidenav").style.maxHeight = "1000px";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
		}
	</script>
	<script type="text/javascript">
		document.oncontextmenu = function () {
			return false;
		}
	</script>
</body>
</html>