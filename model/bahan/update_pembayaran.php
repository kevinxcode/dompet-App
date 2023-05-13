<?php
	include "../config/config.php";
		$sql="UPDATE `pembayaran` SET
		`nama` = '$_POST[nama]',
		`no_telp` = '$_POST[no_telp]',
		`tanggal` = '$_POST[tanggal]',
		`jumlah_pembayaran` = '$_POST[jumlah_pembayaran]',
		`keterangan` = '$_POST[keterangan]',
		
		
		
		
		
		
		`status` = '$_POST[status]' WHERE `id_pembayaran` =
		'$_POST[id_pembayaran]';";
	mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=pembayaran&msg=3"
      </script>');
		
		header ("location:../index.php?p=pembayaran_detail&&id_pembayaran=$_POST[id_pembayaran]&msg=2");
?>