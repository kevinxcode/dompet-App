<?php
	include "../config/config.php";
		$sql="UPDATE `pengajuan_pemasangan` SET
		`id_user` = '$_POST[id_user]',
		
		
		
		
		
		
		`status_pengajuan` = '$_POST[status_pengajuan]' WHERE `id_pengajuan` =
		'$_POST[id_pengajuan]';";
	mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=pemasangan&msg=3"
      </script>');
		
		header ("location:../index.php?p=pemasangan_detail&&id_pengajuan=$_POST[id_pengajuan]&msg=2");
?>