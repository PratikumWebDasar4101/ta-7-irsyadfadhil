<!DOCTYPE html>
<html>
<head>
	<title>INPUT DATA MABA</title>
</head>
<body>
	<center><h1>INPUT DATA MAHASISWA BARU</h1></center>
	<table align="center">
		<form action="prosesdata.php" method="POST" enctype="multipart/form-data"> 
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jeniskelamin" value="Pria">Pria
				<input type="radio" name="jeniskelamin" value="Wanita">Wanita</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><select name="prodi">
					<option value="D3SI">D3 Sistem informasi</option>
					<option value="S1IKOM">S1 Ilmu komunikasi</option>
					<option value="D4SM">D4 Sistem Multimedia</option>
				</select></td>
			</tr>
			<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="FIT">FIT</option>
				<option value="FIK">FIK</option>
				<option value="FKB">FKB</option>
			</select></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td>:</td>
				<td><textarea name="motohidup" rows="10" cols="20"></textarea></td>
			</tr>
			<tr>
				<td align="center" colspan="3"><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>