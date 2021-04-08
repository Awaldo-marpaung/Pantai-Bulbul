<?php

$sandi = mysqli_connect("localhost","root","","Komentar");

if(isset($_POST["submit"]) ){
		//Ambil data dari tiap elemen dalam form

	$Nama = htmlspecialchars( $_POST["Nama"]);
	$Komentar =htmlspecialchars( $_POST["Komentar"]);

//query Insert data
	$query = "INSERT INTO saya
				VALUES
				('','$Nama','$Komentar');
				";
	mysqli_query($sandi,$query);

	if(mysqli_affected_rows($sandi) > 0){
		echo "
			<script>

				alert('Ulasan Anda Berhasil di tambahkan');		
					document.location.href='pelanggan.php';
			</script>
		";
	}
	else{
		echo "Gagal";
		echo "<br>";
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Komentar</title>
	<link rel="stylesheet" href="css/style2.css">
	<style type="text/css">
		label{
			display: block;
		}
	</style>


</head>
<body>
	<fieldset style="box-shadow: 1px 1px 10px; border-radius: 5px;" >
<div class="row">
	<div class="col-md-12">	
		<div class="col-md-2">

		<form action="" method="POST">
	<h1 style="">Kolom Komentar</h1>
		<ul>
				<label for="Nama">Nama	:</label>
					<input type="text" name="Nama" id="Nama" style="width: 800px; height: 22px; border-radius: 1px;">
			
				<label for="Komentar">Komentar:</label>
					<textarea name="Komentar" id="Komentar" style="width: 800px; height: 150px;"></textarea>
		
		</ul>
	</div>
</div>
</div>
				<button name="submit" style="margin-top: 20px; float: right; margin-right: 460px; border-radius: 4px; width: 80px;height: 40px;">Kirim</button>

	</form>
	</fieldset>
<br>
<br>

<center><a href="Kunjungi.html"><button class="tombol">Kembali</button></center> 
</body>
</html>