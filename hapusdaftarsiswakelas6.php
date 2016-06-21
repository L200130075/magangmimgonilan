<?php
include ("conn.php");
mysql_query ("DELETE FROM kelas6 where nama='$_GET[nama]'");
?>
<script>
document.location='adminkelas6.php'</script>