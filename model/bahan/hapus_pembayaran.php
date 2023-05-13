<?php
include "../config/config.php";
$sql="DELETE FROM `pembayaran` WHERE `id_pembayaran` =
'$_GET[id_pembayaran]'";

mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=pembayaran&msg=3"
      </script>');
	header ("location:../index.php?p=pembayaran&msg=5");
?>