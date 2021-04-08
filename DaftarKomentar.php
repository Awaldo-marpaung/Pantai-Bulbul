	 	<?php
$sandi = mysqli_connect("localhost","root","","Komentar");
$result=mysqli_query($sandi,"SELECT * FROM saya ORDER BY id DESC");

?>
<!DOCTYPE html>
<html>
<head>

	<title>Galeri</title>
<style type="text/css">
	label{
		display: block;
	}
</style>
</head>
<body>
		<a href="Komentar.php" style="color: green; text-decoration: none;">Tambah Komentar</a>
		<?php while ( $row = mysqli_fetch_assoc($result) ): ?>
    	<div>
	   <div>
   Nama:<p style="font-size: 15px; font-family:Kristen ITC Regular ; width: 1300px;"><?php echo $row["Nama"]; ?></p>
     </div>
   	Komentar:<p style="font-size: 12px; font-family:Kristen ITC Regular">
   	<p style="width: 1321px; height: 100px;"><?php echo $row["Komentar"];?></p>
</div>
</div>
<?php endwhile; ?>
</body>
</html>