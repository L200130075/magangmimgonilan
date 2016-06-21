
<?php
include('conn.php');
 
//tangkap data dari form login
$username = $_POST['user'];
$password = $_POST['pwd'];
 
//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 
//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
    echo"<script>alert('Maaf data yang anda masukkan tidak lengkap');
      document.location.href='adminlogin.php'; </script>\n";
    break;
} 
 
$q = mysql_query("select * from admin where user='$username' and psw='$password'");
 
if (mysql_num_rows($q) == 1) {
    //kalau username dan password sudah terdaftar di database
    header('location:admin.php');
} else {
   echo "<script>alert('Maaf Username / Password tidak dikenal!!'); document.location.href='index.php';</script>";;
}
 ?>