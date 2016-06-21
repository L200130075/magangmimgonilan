<?php
include ("conn.php");
mysql_query ("DELETE FROM kelas1 where nama='$_GET[nama]'");
?>
<script>
document.location='adminkelas1.php'</script>