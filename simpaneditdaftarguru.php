<?php
include "conn.php";
$id=$_GET['id'];
$no=$_POST['no'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$nip = $_POST['nip'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$query = mysql_query("UPDATE guru SET nama= '$nama', jabatan = '$jabatan', nip= '$nip', jeniskelamin = '$jeniskelamin', alamat= '$alamat' WHERE id ='$no'");
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='admin-guru.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='admin.php'</script>\n";
}
?>    