<?php
	 include "../config/config.php";
// Cek username di database
$cek_konsumen=mysql_num_rows(mysql_query
             ("SELECT id_pengajuan FROM pengajuan_pemasangan
               WHERE id_pengajuan='$_POST[id_pengajuan]'"));
// Kalau username sudah ada yang pakai
if ($cek_konsumen > 0){
echo header('location:../index.php?p=pemasangan&msg=3');
}
// Kalau username valid, inputkan data ke tabel users
else{
	
	//menyimpan ke table 
	$sql = "insert into pengajuan_pemasangan
	(id_user,nama,alamat,no_telp,paket,tanggal,status_pengajuan) values 
	('{$_POST['id_user']}',
	'{$_POST['nama']}',
	'{$_POST['alamat']}',
	'{$_POST['no_telp']}',
	'{$_POST['paket']}',
	'{$_POST['tanggal']}',
	
	
	'{$_POST['status_pengajuan']}')";
	mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../index.php?p=pemasangan&msg=3"
      </script>');
		
		echo header('location:../index.php?p=pemasangan&msg=2');
	

}
