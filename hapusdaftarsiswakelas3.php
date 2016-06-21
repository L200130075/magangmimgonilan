<?php
include ("conn.php");
mysql_query ("DELETE FROM kelas3 where nama='$_GET[nama]'");
?>
<script>
document.location='adminkelas3.php'</script>