<?php
	 include "../config/config.php";
// Cek username di database
$cek_konsumen=mysql_num_rows(mysql_query
             ("SELECT id_credit FROM credit
               WHERE id_credit='$_POST[id_credit]'"));
// Kalau username sudah ada yang pakai
if ($cek_konsumen > 0){
echo header('location:../index.php?p=credit&msg=3');
}
// Kalau username valid, inputkan data ke tabel users
else{
	
	//menyimpan ke table 
	$sql = "insert into credit
	(id_user,pengeluaran,tanggal,jumlah) values 
	('{$_POST['id_user']}',
	'{$_POST['pengeluaran']}',
	'{$_POST['tanggal']}',
	
	
	
	'{$_POST['jumlah']}')";
	mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=credit&msg=3"
      </script>');
		
		echo header('location:../index.php?p=credit&msg=2');
	

}
