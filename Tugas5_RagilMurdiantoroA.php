<!--
======================================
	PROGRAM INI DI BUAT OLEH SAYA 
		RAGIL MURDIANTORO A
=======================================
-->
<!DOCTYPE html>
<html>
<head>
	<title>Tugas 5</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="topnav">
  <h1>Kalkulator Sederhana</h1>
</div>
<div class="container">
	<form method="POST" action="">
		<p>INPUT BIL 1 : 
			<input type="number" name="bil1">
		</p>
		<p>INPUT BIL 2 :
			<input type="number" name="bil2">
		</p>
		<p>
			<input type="submit" class="button" value="Hasil">
		</p>
		<br><br>
	</form>
</div>

<div class="bottomnav">
	<?php
	error_reporting(0);
	//nilai variabel x dan y di ambil dari form Tugas5_RagilMurdiantoroA.php
	$x = $_POST['bil1'];
	$y = $_POST['bil2'];
	echo "<p>";
	echo "bilangan 1 : ".$x."<br>";
	echo "bilangan 2 : ".$y."<br>";
	echo "=================================<br>";

	//fungsi penjumlahan
	function tambah() {
		global $x, $y; #karena x dan y tidak bisa di pakai di dalam fungsi, maka dikenakan perintah global
		$hasil = $x + $y;
		echo "hasil penjumlahan adalah : $hasil <br>";
	}
	//fungsi pengurangan
	function kurang() {
		global $x, $y;
		$hasil = $x - $y;
		echo "hasil pengurangan adalah : $hasil <br>";
	}
	//fungsi perkalian
	function kali() {
		global $x, $y;
		$hasil = $x * $y;
		echo "hasil perkalian adalah : $hasil <br>";
	}
	//fungsi pembagian
	function bagi() {
		global $x, $y;
		$hasil = $x / $y;
		echo "hasil pembagian adalah : $hasil <br>";
	}

	//panggil fungsi tambah, kurang, kali, dan bagi
	tambah();
	kurang();
	kali();
	bagi();
	echo"</p>";
	?>
</div>
</body>
</html>