<?php
	include "../config/config.php";
		$sql="UPDATE `user` SET
	
		
		
		`status` = '$_POST[status]' WHERE `id_user` =
		'$_POST[id_user]';";
	mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=user_calon&msg=3"
      </script>');
	header ("location:../index.php?p=user_calon&msg=4");
?>