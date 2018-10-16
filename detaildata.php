<?php
    include("db.php");
    $nim = $_GET['nim'];
    $sql = mysqli_query($conn, "SELECT * FROM maba WHERE nim = '$nim'");
    $row = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE DATA MABA</title>
</head>
<body>
	<center><h1>UPDATE DATA MAHASISWA BARU</h1></center>
	<table align="center">
		<form method="POST" enctype="multipart/form-data"> 
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php echo $row['nim'];?>" readonly disabled></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jeniskelamin"  <?php if($row['jeniskelamin'] == "Pria") { ?> checked <?php } ?> value="Pria">Pria
				<input type="radio" name="jeniskelamin" <?php if($row['jeniskelamin'] == "Wanita") { ?> checked <?php } ?> value="Wanita">Wanita</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><select name="prodi">
					<option <?php if($row['prodi'] == "D3SI") { ?> checked <?php } ?> value="D3SI">D3 Sistem informasi</option>
					<option <?php if($row['prodi'] == "S1IKOM") { ?> checked <?php } ?> value="S1IKOM">S1 Ilmu komunikasi</option>
					<option <?php if($row['prodi'] == "D4SM") { ?> checked <?php } ?> value="D4SM">D4 Sistem Multimedia</option>
				</select></td>
			</tr>
			<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option <?php if($row['fakultas'] == "FIT") { ?> selected <?php } ?> value="FIT">FIT</option>
				<option <?php if($row['fakultas'] == "FIK") { ?> selected <?php } ?> value="FIK">FIK</option>
				<option <?php if($row['fakultas'] == "FKB") { ?> selected <?php } ?> value="FKB">FKB</option>
			</select></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal" value="<?php echo $row['asal'];?>"></td>
			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td>:</td>
				<td><textarea name="motohidup" rows="10" cols="20"><?php echo $row['motohidup'];?></textarea></td>
			</tr>
			<tr>
				<td align="center" colspan="3"><input type="submit" name="submit" value="UPDATE"></td>
			</tr>
		</form>
	</table>
</body>
</html>
<?php
    if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $jeniskelamin = $_POST['jeniskelamin'];
            $prodi = $_POST['prodi'];
            $fakultas = $_POST['fakultas'];
            $asal = $_POST['asal'];
            $motohidup = $_POST['motohidup'];
            $sql = "UPDATE maba SET nama='$nama', jeniskelamin='$jeniskelamin', prodi='$prodi', fakultas='$fakultas',asal='$asal',motohidup='$motohidup' WHERE nim='$nim'";
            if (mysqli_query($conn,$sql)) {
                ?>
                <script>
                    alert("Data berhasil diubah");
                    location = "viewdata.php";
                </script>
            <?php
            }
        }
?>