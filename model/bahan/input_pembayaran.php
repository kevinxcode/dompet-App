<?php
	 include "../config/config.php";
// Cek username di database
$cek_konsumen=mysql_num_rows(mysql_query
             ("SELECT id_pembayaran FROM pembayaran
               WHERE id_pembayaran='$_POST[id_pembayaran]'"));
// Kalau username sudah ada yang pakai
if ($cek_konsumen > 0){
echo header('location:../index.php?p=pembayaran&msg=3');
}
// Kalau username valid, inputkan data ke tabel users
else{
	
	//menyimpan ke table 
	$sql = "insert into pembayaran
	(nama,no_telp,tanggal,jumlah_pembayaran,keterangan,status) values 
	('{$_POST['nama']}',
	'{$_POST['no_telp']}',
	'{$_POST['tanggal']}',
	'{$_POST['jumlah_pembayaran']}',
	'{$_POST['keterangan']}',
	
	
	
	'{$_POST['status']}')";
	mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=pembayaran&msg=3"
      </script>');
		
		echo header('location:../index.php?p=pembayaran&msg=2');
	

}
