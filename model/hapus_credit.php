<?php
include "../config/config.php";
$sql="DELETE FROM `credit` WHERE `id_credit` =
'$_GET[id_credit]'";

mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=credit&msg=3"
      </script>');
	header ("location:../index.php?p=credit&msg=5");
?>