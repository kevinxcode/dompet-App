<?php
include "../config/config.php";
$sql="DELETE FROM `pengaduan` WHERE `id_pengaduan` =
'$_GET[id_pengaduan]'";

mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=pengaduan&msg=3"
      </script>');
	header ("location:../index.php?p=pengaduan&msg=5");
?>