<?php  
include("db.php");

if (isset($_POST['submit'])) {

$nama			= $_POST['nama'];
$nim 			= $_POST['nim'];
$jeniskelamin	= $_POST['jeniskelamin'];
$prodi 			= $_POST['prodi'];
$fakultas 		= $_POST['fakultas'];
$asal 			= $_POST['asal'];
$motohidup 		= $_POST['motohidup'];

$query = "INSERT INTO maba(nama, nim, jeniskelamin, prodi, fakultas, asal, motohidup)
		VALUES ('$nama','$nim','$jeniskelamin','$prodi','$fakultas','$asal','$motohidup')";

if (mysqli_query($conn, $query)) {
	echo "<script>
				alert('Data berhasil di tambah');
				location='viewdata.php';
		 </script>";
}else {
	echo "Gagal Tambah data";
}

}
?>