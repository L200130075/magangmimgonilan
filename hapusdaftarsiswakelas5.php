<?php
include ("conn.php");
mysql_query ("DELETE FROM kelas5 where nama='$_GET[nama]'");
?>
<script>
document.location='adminkelas5.php'</script>