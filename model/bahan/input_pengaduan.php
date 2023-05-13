<?php
	 include "../config/config.php";
// Cek username di database
$cek_konsumen=mysql_num_rows(mysql_query
             ("SELECT id_pengaduan FROM pengaduan
               WHERE id_pengaduan='$_POST[id_pengaduan]'"));
// Kalau username sudah ada yang pakai
if ($cek_konsumen > 0){
echo header('location:../index.php?p=pengaduan&msg=3');
}
// Kalau username valid, inputkan data ke tabel users
else{
	
	//menyimpan ke table 
	$sql = "insert into pengaduan
	(nama,no_telp,tanggal,isi_pengaduan) values 
	('{$_POST['nama']}',
	'{$_POST['no_telp']}',
	'{$_POST['tanggal']}',
	
	
	
	'{$_POST['isi_pengaduan']}')";
	mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=pengaduan&msg=3"
      </script>');
		
		echo header('location:../index.php?p=pengaduan&msg=2');
	

}
