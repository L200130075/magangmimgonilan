<?php
error_reporting(E_ALL ^ (E_DEPRECATED));
$koneksi = mysql_connect("localhost","root","") or die("tidak bisa koneksi ke database");
mysql_select_db('mimgonilan');
?>
