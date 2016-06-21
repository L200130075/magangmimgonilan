<?php
include "conn.php";
$id = $_GET['id'];
$no = $_POST['no'];
$noinduk = $_POST['noinduk'];
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$namaorangtua = $_POST['namaorangtua'];
$alamat = $_POST['alamat'];
$query = mysql_query("UPDATE kelas6 SET noinduk= '$noinduk', nisn= '$nisn', nama= '$nama', jeniskelamin = '$jeniskelamin', tempatlahir= '$tempatlahir', tanggallahir= '$tanggallahir', namaorangtua= '$namaorangtua', alamat= '$alamat' WHERE id ='$no'");
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='adminkelas6.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='adminkelas6.php'</script>\n";
}
?>    