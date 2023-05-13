<?php
include "../config/config.php";
$sql="DELETE FROM `pengajuan_pemasangan` WHERE `id_pengajuan` =
'$_GET[id_pengajuan]'";

mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=pemasangan&msg=3"
      </script>');
	header ("location:../index.php?p=pemasangan&msg=5");
?>