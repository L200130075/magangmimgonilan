<?php
	include ("conn.php");
	if (isset ($_POST ['simpan']));
	$no = $_POST ['no'];
	$noinduk = $_POST ['noinduk'];
	$nisn = $_POST ['nisn'];
	$nama= $_POST ['nama'];
	$jeniskelamin = $_POST ['jeniskelamin'];
	$tempatlahir= $_POST ['tempatlahir'];
	$tanggallahir= $_POST ['tanggallahir'];
	$namaorangtua= $_POST ['namaorangtua'];
	$alamat = $_POST ['alamat'];
	$simpan = "insert into kelas2 values ('$no', '$noinduk', '$nisn', '$nama', '$jeniskelamin', '$tempatlahir', '$tanggallahir', '$namaorangtua', '$alamat')";
	$hasil = mysql_query ($simpan, $koneksi);
	if ($hasil)
{
echo"<script>alert('berhasil menambah');
document.location.href='adminkelas2.php'</script>\n";
}
?>