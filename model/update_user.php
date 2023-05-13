<?php
	include "../config/config.php";
	if ($_POST['password']=='') {
		$sql="UPDATE `user` SET
		`username` = '$_POST[username]',
		`nama` = '$_POST[nama]',

		
		`status` = '$_POST[status]' WHERE `id_user` =
		'$_POST[id_user]';";
	}else{
		$sql="UPDATE `user` SET
		`username` = '$_POST[username]',
		`password` = md5('$_POST[password]'),
		`nama` = '$_POST[nama]',
	
		
		`status` = '$_POST[status]' WHERE `id_user` =
		'$_POST[id_user]';";
	}
	mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=user&msg=3"
      </script>');
	header ("location:../index.php?p=user&msg=4");
?>