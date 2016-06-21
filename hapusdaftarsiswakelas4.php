<?php
include ("conn.php");
mysql_query ("DELETE FROM kelas4 where nama='$_GET[nama]'");
?>
<script>
document.location='adminkelas4.php'</script>