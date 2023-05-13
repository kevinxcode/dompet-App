<?php
	 include "../config/config.php";
// Cek username di database
$cek_konsumen=mysql_num_rows(mysql_query
             ("SELECT username FROM user
               WHERE username='$_POST[username]'"));
// Kalau username sudah ada yang pakai
if ($cek_konsumen > 0){
echo "<script>alert('Nama sudah ada yang pakai. Ulangi lagi'); window.location ='../register.php'</script>";
}
// Kalau username valid, inputkan data ke tabel users
else{
	
	$sql="INSERT INTO `user`(
	`username`,
	`password`,
	`nama`,
	`alamat`,
	`no_telp`,
	
	
	`status`)
	VALUES ('$_POST[username]',md5('$_POST[password]'),'$_POST[nama]','$_POST[alamat]','$_POST[no_telp]','$_POST[status]')";
	mysql_query($sql) or die('<script type="text/javascript">
           window.location = "../login.php?msg=3"
      </script>');
		
		echo header('location:../login.php?msg=1');



}