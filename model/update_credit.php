<?php
	include "../config/config.php";
		$sql="UPDATE `credit` SET
		`id_user` = '$_POST[id_user]',
		`pengeluaran` = '$_POST[pengeluaran]',
		
		`tanggal` = '$_POST[tanggal]',
		
		
		
		
		
		`jumlah` = '$_POST[jumlah]' WHERE `id_credit` =
		'$_POST[id_credit]';";
	mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=credit&msg=3"
      </script>');
		
		header ("location:../index.php?p=credit_detail&&id_credit=$_POST[id_credit]&msg=2");
?>