<?php
include ("conn.php");
if (isset ($_POST["simpan"]));
$id=$_POST["id"];
$judul=$_POST["judul"];
$folder="images";
$tmp_name=$_FILES["image"]["tmp_name"];
$name=$folder."/".$_FILES["image"]["name"];
move_uploaded_file($tmp_name, $name);
$simpan= "insert into galeri values ('$id','$judul','$name')";
$hasil =mysql_query ($simpan,$koneksi);
if ($hasil)
{
echo"<script>alert('berhasil menambah');
document.location.href='admingaleri.php'</script>\n";
}

?>