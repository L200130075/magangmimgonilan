<?php
include ("conn.php");
mysql_query ("DELETE FROM kelas2 where nama='$_GET[nama]'");
?>
<script>
document.location='adminkelas2.php'</script>