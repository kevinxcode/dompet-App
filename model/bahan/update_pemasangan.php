<?php
	include "../config/config.php";
		$sql="UPDATE `pengajuan_pemasangan` SET
		`id_user` = '$_POST[id_user]',
		`nama` = '$_POST[nama]',
		`alamat` = '$_POST[alamat]',
		`no_telp` = '$_POST[no_telp]',
		`paket` = '$_POST[paket]',
		`tanggal` = '$_POST[tanggal]',
		
		
		
		
		
		`status_pengajuan` = '$_POST[status_pengajuan]' WHERE `id_pengajuan` =
		'$_POST[id_pengajuan]';";
	mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=pemasangan&msg=3"
      </script>');
		
		header ("location:../index.php?p=pemasangan_detail&&id_pengajuan=$_POST[id_pengajuan]&msg=2");
?>