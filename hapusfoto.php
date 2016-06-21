<?php
include ("conn.php");
mysql_query ("DELETE FROM galeri where judul='$_GET[judul]'");
?>
<script>
document.location='admingaleri.php'</script>