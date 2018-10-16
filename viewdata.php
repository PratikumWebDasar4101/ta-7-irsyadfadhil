<!DOCTYPE html>
<html>
<head>
	<title>View Data Mahasiswa Baru</title>
</head>
<body>
	<center><h1>LIHAT DATA</h1></center>
<table align="center" border="1">
	<tr>
		<td>Nama</td>
		<td>NIM</td>
		<td>AKSI</td>
	</tr>
	<?php  
	include ('db.php');
	@$search = $_POST['search'];
	$query1 = "SELECT nim, nama FROM maba WHERE nim LIKE '%$search%'";
	$result = mysqli_query($conn, $query1);

	if (mysqli_num_rows($result)>0) {
		while ($row = mysqli_fetch_assoc($result)){
	?>
	<tr>
		<td><?php echo $row['nama']?></td>
		<td><?php echo $row['nim']?></td>
		<td><a href="hapusdata.php?nim=<?php echo $row['nim']; ?>">Hapus</a> | <a href="detaildata.php?nim=<?php echo $row['nim']?>">Detail</a></td>
	</tr>
	<?php
	}
	} else {
		echo "0 Result";
	}  
	?>
</table>
<br>
<br>
<center>
<form action="viewdata.php" method="POST">
	CARI NIM : <input type="text" name="search"> <input type="submit" value="cari">
</form>
</center>
<br>
<br>
<center><a href="inputdata.php">Tambah Data</a></center>
</body>
</html>