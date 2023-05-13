<?php
include "../config/config.php";
$sql="DELETE FROM `user` WHERE `id_user` =
'$_GET[id_user]'";

mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=user&msg=3"
      </script>');
	header ("location:../index.php?p=user&msg=5");
?>