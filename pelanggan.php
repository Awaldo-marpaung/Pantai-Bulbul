<?php 

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Komentar</title>
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
</head>
<body>
<?php
	
	$con = mysqli_connect("localhost","root","","komentar");
	?>
<h2>Komentar </h2>

<table class="table table-bordered">
	<thead style="background-color: black; color: white;">
		<th>NO</th>
		<th>Nama</th>
		<th>Komentar</th>
	</thead>
	<tbody style="background-color: grey;">
	<?php $nomor=1 ?>
	<?php $ambil=$con->query("SELECT * FROM saya") ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $nomor; ?></td>
		<td><?php echo $pecah['Nama']; ?></td>
		<td><?php echo $pecah['Komentar']; ?></td>
		</tr>
		<?php $nomor++ ?>
		<?php } ?>
	</tbody>
</table>

<br>
<center><a href="Komentar.php" class="tombol"><b>Tambah Komentar</b></a></center>
<br>
<br>

</body>
</html>



