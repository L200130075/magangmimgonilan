<?php
include ("conn.php");
mysql_query ("DELETE FROM guru where nama='$_GET[nama]'");
?>
<script>
document.location='admin-guru.php'</script>