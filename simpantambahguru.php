<?php
	include ("conn.php");
	if (isset ($_POST ['simpan']));
	$no = $_POST ['no'];
	$nama = $_POST ['nama'];
	$jabatan = $_POST ['jabatan'];
	$nip= $_POST ['nip'];
	$jeniskelamin = $_POST ['jeniskelamin'];
	$alamat = $_POST ['alamat'];
	$simpan = "insert into guru values ('$no', '$nama', '$jabatan', '$nip', '$jeniskelamin', '$alamat')";
	$hasil = mysql_query ($simpan, $koneksi);
	if ($hasil)
{
echo"<script>alert('berhasil menambah');
document.location.href='admin-guru.php#daftarfilm'</script>\n";
}
?>